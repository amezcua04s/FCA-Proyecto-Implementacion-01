@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Lista de Anticipos</h1>
    @if (Auth::user()->admin)
        <div class="mb-3">
            <a href="{{ route('anticipos.create') }}" class="btn btn-primary">Crear nuevo anticipo</a>
        </div>
    @endif

    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col" style="width: 5%;">ID</th>
                <th scope="col" style="width: 20%;">Proyecto</th>
                <th scope="col" style="width: 15%;">Cliente</th>
                <th scope="col" style="width: 15%;">Monto</th>
                <th scope="col" style="width: 15%;">Fecha</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($anticipos as $anticipo)
            <tr>
                <td>{{ $anticipo->id }}</td>
                <td>{{ $anticipo->proyectoNombre }}</td>
                <td>{{ $anticipo->clienteRazon }}</td>
                <td>{{ $anticipo->monto }}</td>
                <td>{{ $anticipo->fecha }}</td>
                <td>
                    <div class="d-flex">
                        <a href="{{ route('anticipos.show', $anticipo) }}" class="btn btn-info btn-sm me-2">Ver más</a>
                        @if (Auth::user()->admin)
                            <a href="{{ route('anticipos.edit', $anticipo) }}" class="btn btn-secondary btn-sm me-2">Editar</a>
                            <button type="button" class="btn btn-danger btn-sm me-2" data-bs-toggle="modal" data-bs-target="#modalEliminar-{{ $anticipo->id }}">Eliminar</button>
                        @endif
                    </div>

                    <!-- Modal de eliminación -->
                    <div class="modal fade" id="modalEliminar-{{ $anticipo->id }}" tabindex="-1" aria-labelledby="modalEliminarLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="modalEliminarLabel">¿Desea eliminar este anticipo?</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <strong>Esta acción no se puede deshacer.</strong>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <form action="{{ route('anticipos.destroy', $anticipo->id) }}" method="POST">
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
    {{ $anticipos->links() }} <!-- Paginación -->
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
@endsection
