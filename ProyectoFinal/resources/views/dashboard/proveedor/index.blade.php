@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Lista de proveedores</h1>
    <div class="mb-3">
        <a href="{{ route('proveedores.create') }}" class="btn btn-primary">Crear nuevo proveedor</a>
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
            @foreach ($proveedores as $proveedor)
            <tr>
                <th scope="row">{{ $proveedor->id }}</th>
                <td>{{ $proveedor->razon }}</td>
                <td>{{ $proveedor->persona }}</td>
                <td>{{ $proveedor->rfc }}</td>
                <td>{{ $proveedor->domicilio }}</td>
                <td>{{ $proveedor->email }}</td>
                <td>{{ $proveedor->telefono }}</td>
                <td>
                    <a href="{{ route('proveedores.edit', $proveedor) }}" class="btn btn-secondary">Editar</a>
                    <form action="{{ route('proveedores.destroy', $proveedor->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $proveedores->links() }} <!-- Enlaces de paginación -->
</div>
@endsection