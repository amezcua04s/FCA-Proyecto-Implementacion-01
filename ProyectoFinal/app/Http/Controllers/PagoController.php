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
        /**
           * $pagos = Pago::join('proyecto', 'pago.proyecto', '=', 'proyecto.id')
           * ->join('proveedor', 'pago.proveedor', '=', 'proveedor.id')
           * ->select('pago.*', 'proyecto.nombre as proyecto', 'proveedor.razon as proveedor')
           * ->paginate(10);
        */
        $pagos = Pago::with(['proyecto', 'proveedor'])->paginate(10);
    
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
        $data = $request->validated();
        Pago::create($data);
        if($errors->any()){
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
        $pago       = Pago::with(['proyecto', 'proveedor'])->findOrFail($id);
     
        return view('dashboard.pago.show', compact('pago'));
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
        $pago->delete();
        return redirect()->route('pagos.index')->with('status', 'Pago eliminado con éxito');
    }
}
