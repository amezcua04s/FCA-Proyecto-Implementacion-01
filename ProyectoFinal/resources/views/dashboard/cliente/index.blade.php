@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Lista de clientes</h1>
    <div class="mb-3">
        <a href="{{ route('clientes.create') }}" class="btn btn-primary">Crear nuevo cliente</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Razón Social</th>
                <th>Tipo de Persona</th>
                <th>RFC</th>
                <th>Domicilio</th>
                <th>Correo Electrónico</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($clientes as $cliente)
            <tr>
                <th scope="row">{{ $cliente->id }}</th>
                <td>{{ $cliente->razon }}</td>
                <td>{{ $cliente->persona }}</td>
                <td>{{ $cliente->rfc }}</td>
                <td>{{ $cliente->domicilio }}</td>
                <td>{{ $cliente->email }}</td>
                <td>{{ $cliente->telefono }}</td>
                <td>
                    <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-secondary">Editar</a>
                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $clientes->links() }} <!-- Enlaces de paginación -->
</div>
@endsection