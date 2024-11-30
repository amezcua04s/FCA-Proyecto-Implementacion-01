@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Lista de proyectos</h1>
    <div class="mb-3">
        <a href="{{ route('proyectos.create') }}" class="btn btn-primary">Crear nuevo proyecto</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Fin</th>
                <th>Costo total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($proyectos as $proyecto)
            <tr>
                <th scope="row">{{ $proyecto->id }}</th>
                <td>{{ $proyecto->nombre }}</td>
                <td>{{ $proyecto->descripcion }}</td>
                <td>{{ $proyecto->fecha_inicio }}</td>
                <td>{{ $proyecto->fecha_fin }}</td>
                <td>{{ $proyecto->presupuesto }}</td>
                <td>
                    <a href="{{ route('proyectos.show', $proyecto) }}" class="btn btn-info">Ver más</a>
                    <a href="{{ route('proyectos.edit', $proyecto) }}" class="btn btn-secondary">Editar</a>
                    <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $proyectos->links() }} <!-- Enlaces de paginación -->
</div>
@endsection