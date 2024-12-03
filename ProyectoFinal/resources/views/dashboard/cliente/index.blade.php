@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Lista de Clientes</h1>
    @if (Auth::user()->admin)
        <div class="mb-3">
            <a href="{{ route('clientes.create') }}" class="btn btn-primary">Crear nuevo cliente</a>
        </div>
    @endif

    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col" style="width: 3%;">ID</th>
                <th scope="col" style="width: 15%;">Razón Social</th>
                <th scope="col" style="width: 8%;">Tipo de Persona</th>
                <th scope="col" style="width: 10%;">RFC</th>
                <th scope="col" style="width: 15%;">Domicilio</th>
                <th scope="col" style="width: 15%;">Correo Electrónico</th>
                <th scope="col" >Teléfono</th>
                <th scope="col" style="width: 22%;">Acciones</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->razon }}</td>
                <td>{{ $cliente->persona }}</td>
                <td>{{ $cliente->rfc }}</td>
                <td>{{ $cliente->domicilio }}</td>
                <td>{{ $cliente->email }}</td>
                <td>{{ $cliente->telefono }}</td>
                <td>
                    <div class="d-flex">
                        <a href="{{ route('clientes.show', $cliente) }}" class="btn btn-info btn-sm me-2">Ver más</a>
                        @if (Auth::user()->admin)
                            <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-secondary btn-sm me-2">Editar</a>
                            <button type="button" class="btn btn-danger btn-sm me-2" data-bs-toggle="modal" data-bs-target="#modalEliminar-{{ $cliente->id }}">Eliminar</button>
                        @endif
                    </div>

                    <!-- Modal de eliminación -->
                    <div class="modal fade" id="modalEliminar-{{ $cliente->id }}" tabindex="-1" aria-labelledby="modalEliminarLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title fs-5" id="modalEliminarLabel">Confirmar eliminación</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ¿Está seguro de que desea eliminar este cliente?
                                    <br>
                                    <strong>Esta acción no se puede deshacer.</strong>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">
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
    {{ $clientes->links() }} <!-- Paginación -->
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
@endsection
