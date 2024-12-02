@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Lista de Pagos</h1>
    @if (Auth::user()->admin)
        <div class="mb-3">
            <a href="{{ route('pagos.create') }}" class="btn btn-primary">Crear nuevo pago</a>
        </div>
    @endif

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col" style="width: 5%;">ID</th>
                <th scope="col" style="width: 15%;">Proyecto</th>
                <th scope="col" style="width: 15%;">Proveedor</th>
                <th scope="col" style="width: 10%;">Monto</th>
                <th scope="col" style="width: 15%;">Fecha</th>
                <th scope="col" style="width: 20%;">Acciones</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($pagos as $pago)
            <tr>
                <td>{{ $pago->id }}</td>
                <td>{{ $pago->proyectoNombre }}</td>
                <td>{{ $pago->proveedorRazon }}</td>
                <td>{{ $pago->monto }}</td>
                <td>{{ $pago->fecha }}</td>
                <td>
                    <a href="{{ route('pagos.show', $pago) }}" class="btn btn-info btn-sm me-2">Ver más</a>
                    @if (Auth::user()->admin)
                    <a href="{{ route('pagos.edit', $pago) }}" class="btn btn-secondary btn-sm me-2">Editar</a>                <td>
                </td>
                <td>
                        <form action="{{ route('pagos.destroy', $pago->id) }}" method="POST">
                    
                            <button type="button" class="btn btn-danger btn-sm me-2" data-bs-toggle="modal" data-bs-target="#modalEliminar">Eliminar</button>
          
                            <div class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="modalEliminar" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title fs-5" id="modalEliminar">Confirmar eliminación</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    ¿Está seguro de que desea eliminar este Pago?
                                    <br>
                                    <strong>Esta acción no se puede deshacer.</strong>
                                </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                  </div>
                                </div>
                              </div>
                            </div>

                          </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $pagos->links() }} <!-- Enlaces de paginación -->
    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var confirmDeleteModal = document.getElementById('confirmDeleteModal');
        confirmDeleteModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var id = button.getAttribute('data-id');
            var form = document.getElementById('deleteForm');
            form.action = '/pagos/' + id;
        });
    });
</script>
@endsection