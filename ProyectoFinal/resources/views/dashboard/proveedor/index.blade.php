@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Lista de Proveedores</h1>
    @if (Auth::user()->admin)
        <div class="mb-3">
            <a href="{{ route('proveedores.create') }}" class="btn btn-primary">Crear nuevo proveedor</a>
        </div>
    @endif

    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col" style="width: 3%;">ID</th>
                <th scope="col" style="width: 10%;">Razón Social</th>
                <th scope="col" style="width: 7%;">Tipo de Persona</th>
                <th scope="col" style="width: 12%;">RFC</th>
                <th scope="col" style="width: 20%;">Domicilio</th>
                <th scope="col">Correo Electrónico</th>
                <th scope="col">Teléfono</th>
                <th scope="col" style="width: 22%;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $proveedor)
            <tr>
                <td>{{ $proveedor->id }}</td>
                <td>{{ $proveedor->razon }}</td>
                <td>{{ $proveedor->persona }}</td>
                <td>{{ $proveedor->rfc }}</td>
                <td>{{ $proveedor->domicilio }}</td>
                <td>{{ $proveedor->email }}</td>
                <td>{{ $proveedor->telefono }}</td>
                <td>
                    <div class="d-flex">
                        <a href="{{ route('proveedores.show', $proveedor) }}" class="btn btn-info btn-sm me-2">Ver más</a>
                        @if (Auth::user()->admin)
                            <a href="{{ route('proveedores.edit', $proveedor) }}" class="btn btn-secondary btn-sm me-2">Editar</a>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalEliminar-{{ $proveedor->id }}">Eliminar</button>
                        @endif
                    </div>
                    <!-- Modal de eliminación -->
                    <div class="modal fade" id="modalEliminar-{{ $proveedor->id }}" tabindex="-1" aria-labelledby="modalEliminarLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalEliminarLabel">Confirmar eliminación</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ¿Está seguro de que desea eliminar este proveedor? <br>
                                    <strong>Esta acción no se puede deshacer.</strong>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <form action="{{ route('proveedores.destroy', $proveedor->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $proveedores->links() }} <!-- Paginación -->
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
@endsection
