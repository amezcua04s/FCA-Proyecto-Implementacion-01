<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Requests\StoreClienteRequest;

class ClienteController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::paginate(10);
        return view('dashboard.cliente.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $persona = new Cliente();
        return view('dashboard.cliente.create', compact('persona'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClienteRequest $request)
    {
        $data = $request->validated();
        Cliente::create($data);
        return redirect()->route('clientes.index')->with('status', 'Cliente creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $persona = Cliente::findOrFail($id);
        return view('dashboard.cliente.edit', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreClienteRequest $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $data = $request->validated();
        $cliente->update($data);
        return redirect()->route('clientes.index')->with('status', 'Cliente actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('clientes.index')->with('status', 'Cliente eliminado con éxito');
    }
}
