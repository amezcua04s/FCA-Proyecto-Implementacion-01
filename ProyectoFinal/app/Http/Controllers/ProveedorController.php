<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProveedorRequest;

class ProveedorController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedores = Proveedor::paginate(10);
        return view('dashboard.proveedor.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $persona = new Proveedor();
        return view('dashboard.proveedor.create', compact('persona'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProveedorRequest $request)
    {
        $data = $request->validated();
        Proveedor::create($data);
        if($errors->any()){
            return redirect()->route('proveedores.create')->withErrors($errors);
        } else{
            return redirect()->route('proveedores.index')->with('status', 'Proveedor creado con éxito');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $persona = Proveedor::findOrFail($id);
        return view('dashboard.proveedor.edit', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProveedorRequest $request, $id)
    {
        $proveedor = Proveedor::findOrFail($id);
        $data = $request->validated();
        $proveedor->update($data);
        return redirect()->route('proveedores.index')->with('status', 'Proveedor actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->delete();
        return redirect()->route('proveedores.index')->with('status', 'Proveedor eliminado con éxito');
    }
}
