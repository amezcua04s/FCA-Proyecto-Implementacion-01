<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProyectoRequest;

class ProyectoController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyectos = Proyecto::paginate(10);
        return view('dashboard.proyecto.index', compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proyecto = new Proyecto();
        return view('dashboard.proyecto.create', compact('proyecto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProyectoRequest $request)
    {
        $data = $request->validated();
        Proyecto::create($data);
        return redirect()->route('proyectos.index')->with('status', 'Proyecto creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $proyecto = Proyecto::findOrFail($id);
        return view('dashboard.proyecto.show', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $proyecto = Proyecto::findOrFail($id);
        return view('dashboard.proyecto.edit', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProyectoRequest $request, $id)
    {
        $proyecto = Proyecto::findOrFail($id);
        $data = $request->validated();
        $proyecto->update($data);
        return redirect()->route('proyectos.index')->with('status', 'Proyecto actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $proyecto = Proyecto::findOrFail($id);

        $proyecto->anticipos()->update(['proyecto' => null]);
        $proyecto->pagos()->update(['proyecto' => null]);

        $proyecto->delete();
        return redirect()->route('proyectos.index')->with('status', 'Proyecto eliminado con éxito');
    }

}
