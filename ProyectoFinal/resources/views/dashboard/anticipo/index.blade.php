@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Lista de anticipos</h1>
    <div class="mb-3">
        <a href="{{ route('anticipos.create') }}" class="btn btn-primary">Crear nuevo anticipo</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Proyecto</th>
                <th>Cliente</th>
                <th>Monto</th>
                <th>Fecha</th>
                <th>Referencia</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($anticipos as $anticipo)
            <tr>
                <th scope="row">{{ $anticipo->id }}</th>
                <td>{{ $anticipo->proyectoNombre }}</td>
                <td>{{ $anticipo->clienteRazon }}</td>
                <td>{{ $anticipo->monto }}</td>
                <td>{{ $anticipo->fecha }}</td>
                <td>{{ $anticipo->referencia }}</td>
                <td>
                    <a href="{{ route('anticipos.show', $anticipo) }}" class="btn btn-info">Ver más</a>
                    <a href="{{ route('anticipos.edit', $anticipo) }}" class="btn btn-secondary">Editar</a>
                    <form action="{{ route('anticipos.destroy', $anticipo->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="col-12">
        {{ $anticipos->links() }} <!-- Enlaces de paginación -->
    </div>
</div>
@endsection