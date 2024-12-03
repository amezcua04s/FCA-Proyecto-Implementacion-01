@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Lista de Pagos</h1>
    @if (Auth::user()->admin)
        <div class="mb-3">
            <a href="{{ route('pagos.create') }}" class="btn btn-primary">Crear nuevo pago</a>
        </div>
    @endif

    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Proyecto</th>
                <th scope="col">Proveedor</th>
                <th scope="col">Monto</th>
                <th scope="col">Fecha</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pagos as $pago)
            <tr>
                <td>{{ $pago->id }}</td>
                <td>{{ $pago->proyectoNombre }}</td>
                <td>{{ $pago->proveedorRazon }}</td>
                <td>{{ $pago->monto }}</td>
                <td>{{ $pago->fecha }}</td>
                <td>
                    <div class="d-flex">
                        <a href="{{ route('pagos.show', $pago) }}" class="btn btn-info btn-sm me-2">Ver más</a>
                        @if (Auth::user()->admin)
                            <a href="{{ route('pagos.edit', $pago) }}" class="btn btn-secondary btn-sm me-2">Editar</a>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalPagoEliminar-{{ $pago->id }}">Eliminar</button>
                        @endif
                    </div>
                    <!-- Modal de eliminación -->
                    <div class="modal fade" id="modalPagoEliminar-{{ $pago->id }}" tabindex="-1" aria-labelledby="modalPagoEliminarLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalPagoEliminarLabel">Confirmar eliminación</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ¿Está seguro de que desea eliminar este pago? <br>
                                    <strong>Esta acción no se puede deshacer.</strong>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <form action="{{ route('pagos.destroy', $pago->id) }}" method="POST">
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
    {{ $pagos->links() }} <!-- Paginación -->
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
@endsection
