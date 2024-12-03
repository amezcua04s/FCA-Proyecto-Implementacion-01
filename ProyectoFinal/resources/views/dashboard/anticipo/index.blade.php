@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Lista de Anticipos</h1>
    @if (Auth::user()->admin)
        <div class="mb-3">
            <a href="{{ route('anticipos.create') }}" class="btn btn-primary">Crear nuevo anticipo</a>
        </div>
    @endif

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col" style="width: 5%;">ID</th>
                <th scope="col" style="width: 20%;">Proyecto</th>
                <th scope="col" style="width: 15%;">Cliente</th>
                <th scope="col" style="width: 20%;">Monto</th>
                <th scope="col" style="width: 20%;">Fecha</th>
                <th scope="col" style="width: 20%;">Acciones</th>
                <th scope="col" style="width: 0%;"></th>
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
                    <a href="{{ route('anticipos.show', $anticipo) }}" class="btn btn-info btn-sm me-5">Ver más</a>
                    @if (Auth::user()->admin)
                    <a href="{{ route('anticipos.edit', $anticipo) }}" class="btn btn-secondary btn-sm me-2">Editar</a>
                </td>
                <td>
                    <form action="{{ route('anticipos.destroy', $anticipo->id) }}" method="POST">
                
                        <button type="button" class="btn btn-danger btn-sm me-2" data-bs-toggle="modal" data-bs-target="#eliminarAnticipo">Eliminar</button>
      
                        <div class="modal fade" id="eliminarAnticipo" tabindex="-1" aria-labelledby="eliminarAnticipo" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title fs-5" id="eliminarAnticipo">Confirmar eliminación</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                ¿Está seguro de que desea eliminar este anticipo?
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
    {{ $anticipos->links() }} <!-- Enlaces de paginación -->
</div>

<!-- Modal de confirmación -->

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
            form.action = '/anticipos/' + id;
        });
    });
</script>
@endsection