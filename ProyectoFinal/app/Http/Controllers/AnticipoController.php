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
        /** 
        *     $anticipos = Anticipo::join('proyecto', 'anticipo.proyecto', '=', 'proyecto.id')
        *    ->join('cliente', 'anticipo.cliente', '=', 'cliente.id')
        *    ->select('anticipo.*', 'proyecto.nombre as proyectoNombre', 'cliente.razon as clienteRazon')
        *    ->paginate(10);
        */

        $anticipos = Anticipo::with(['proyecto', 'cliente'])->paginate(10);

        return view('dashboard.anticipo.index', compact('anticipos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proyectos = Proyecto::all();
        $clientes = Cliente::all();
        $anticipo = new Anticipo();

        return view('dashboard.anticipo.create', compact('anticipo', 'proyectos', 'clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnticipoRequest $request)
    {
        $data = $request->validated();
        Anticipo::create($data);
        if($errors->any()){
            session()->forget('status');
            return redirect()->route('proveedores.create')->withErrors($errors);
        } else{
            return redirect()->route('proveedores.index')->with('status', 'Proveedor creado con éxito');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $anticipo = Anticipo::with(['proyecto', 'cliente'])->findOrFail($id);
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
        $anticipo->delete();
        return redirect()->route('anticipos.index')->with('status', 'Anticipo eliminado con éxito');
    }
}
