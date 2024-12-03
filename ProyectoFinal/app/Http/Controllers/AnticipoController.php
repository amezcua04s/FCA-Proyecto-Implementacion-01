<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Anticipo;
use App\Models\Cliente;
use App\Models\Proyecto;

use App\Http\Requests\StoreAnticipoRequest;

class AnticipoController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         
        $anticipos = Anticipo::join('proyecto', 'anticipo.proyecto', '=', 'proyecto.id')
            ->join('cliente', 'anticipo.cliente', '=', 'cliente.id')
            ->select('anticipo.*', 'proyecto.nombre as proyectoNombre', 'cliente.razon as clienteRazon')
            ->paginate(10);
        

        return view('dashboard.anticipo.index', compact('anticipos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proyectos   = Proyecto::all();
        $clientes    = Cliente::all();
        $anticipo    = new Anticipo();

        return view('dashboard.anticipo.create', compact('anticipo', 'proyectos', 'clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnticipoRequest $request)
    {
        $proyecto = Proyecto::find($request->input('proyecto'));
        $monto = $request->input('monto');
        $porAnticipar = $proyecto->total - $proyecto->pagado - $monto;

        if ($porAnticipar < 0) {
            return redirect()->back()->withErrors(['monto' => 'El monto del nuevo pago no puede ser mayor que el valor por pagar.']);
        }

        // Crear un nuevo anticipo
        $anticipo = new Anticipo();
        $anticipo->proyecto = $request->input('proyecto');
        $anticipo->cliente = $request->input('cliente');
        $anticipo->monto = $monto;
        $anticipo->fecha = $request->input('fecha');
        $anticipo->metodo = $request->input('metodo');
        $anticipo->referencia = $request->input('referencia');
        $anticipo->save();

        // Actualizar el valor de anticipado en el proyecto
        $proyecto->anticipado += $monto;
        $proyecto->save();

        return redirect()->route('anticipos.index')->with('success', 'Pago registrado y actualizado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $anticipo = Anticipo::join('proyecto', 'anticipo.proyecto', '=', 'proyecto.id')
            ->join('cliente', 'anticipo.cliente', '=', 'cliente.id')
            ->select(
                'anticipo.id',
                'anticipo.monto', 
                'anticipo.metodo',
                'anticipo.referencia',
                'anticipo.fecha',
                'proyecto.total as proyectoTotal',
                'proyecto.anticipado as proyectoAnticipado', 
                'proyecto.nombre as proyectoNombre',
                'cliente.razon as clienteRazon'
            )
            ->where('anticipo.id', $id) 
            ->first(); 
    
        return view('dashboard.anticipo.show', compact('anticipo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $anticipo = Anticipo::with(['proyecto', 'cliente'])->findOrFail($id);
        $proyectos = Proyecto::all();
        $clientes = Cliente::all();
        return view('dashboard.anticipo.edit', compact('anticipo', 'proyectos', 'clientes'));
    }

    /**
     * Update the specified resource in storage.
     * 
     * 
     */
    public function update(SoteAnticipoRequest $request, $id)
    {
        $data = $request->validated();

        $anticipo = Anticipo::findOrFail($id);
        $anticipo->update($data);
        return redirect()->route('anticipos.index')->with('status', 'Anticipo actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $anticipo = Anticipo::findOrFail($id);
    
        $proyecto = Proyecto::findOrFail($anticipo->proyecto);
    
        $proyecto->anticipado -= $anticipo->monto;
        $proyecto->save(); 
    
        $anticipo->delete();
    
        return redirect()->route('anticipos.index')->with('status', 'Anticipo eliminado con éxito');
    }
}
