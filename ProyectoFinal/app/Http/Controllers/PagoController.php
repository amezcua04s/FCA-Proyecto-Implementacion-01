<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pago;
use App\Models\Proveedor;
use App\Models\Proyecto;

use App\Http\Requests\StorePagoRequest;

class PagoController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $pagos = Pago::join('proyecto', 'pago.proyecto', '=', 'proyecto.id')
            ->join('proveedor', 'pago.proveedor', '=', 'proveedor.id')
            ->select('pago.*', 'proyecto.nombre as proyectoNombre', 'proveedor.razon as proveedorRazon')
            ->paginate(10);
       
    
        return view('dashboard.pago.index', compact('pagos'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $proyectos      = Proyecto::all();
        $proveedores    = Proveedor::all();
        $pago           = new Pago();
        
        return view('dashboard.pago.create', compact('pago', 'proyectos', 'proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePagoRequest $request)
    {
        $proyecto = Proyecto::find($request->input('proyecto'));
        $monto = $request->input('monto');
        $porPagar = $proyecto->total - $proyecto->pagado - $monto;

        if ($porPagar < 0) {
            return redirect()->back()->withErrors(['monto' => 'El monto del nuevo pago no puede ser mayor que el valor por pagar.']);
        }

        // Crear un nuevo pago
        $pago = new Pago();
        $pago->proyecto = $request->input('proyecto');
        $pago->proveedor = $request->input('proveedor');
        $pago->monto = $monto;
        $pago->fecha = $request->input('fecha');
        $pago->metodo = $request->input('metodo');
        $pago->referencia = $request->input('referencia');
        $pago->save();

        // Actualizar el valor de pagado en el proyecto
        $proyecto->pagado += $monto;
        $proyecto->save();

        return redirect()->route('pagos.index')->with('success', 'Pago registrado y actualizado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pago       = Pago::with(['proyecto', 'proveedor'])->findOrFail($id);
        $proyecto   = Proyecto::find($pago->proyecto);
        $proveedor  = Proveedor::find($pago->proveedor);

     
        return view('dashboard.pago.show', compact('pago', 'proyecto', 'proveedor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pago = Pago::with(['proyecto', 'proveedor'])->findOrFail($id);
        $proyectos = Proyecto::all();
        $proveedores = Proveedor::all();
        return view('dashboard.pago.edit', compact('pago', 'proyectos', 'proveedores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePagoRequest $request, string $id)
    {
        $pago       = pago::findOrFail($id);
        $data           = $request->validated();
        
        $pago->update($data);
        
        return redirect()->route('pagos.index')->with('status', 'pago actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pago = Pago::findOrFail($id);
    
        $proyecto = Proyecto::findOrFail($pago->proyecto);
    
        $proyecto->pagado -= $pago->monto;
        $proyecto->save(); 
    
        $pago->delete();
    
        return redirect()->route('pagos.index')->with('status', 'Pago eliminado con éxito');
    }
}
