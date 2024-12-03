@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Lista de Usuarios</h1>
    @if (Auth::user()->admin)
        <div class="mb-3">
            <a href="{{ route('usuarios.create') }}" class="btn btn-primary btn-lg">Registrar nuevo usuario</a>
        </div>
    @endif
    
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col" style="width: 5%;">ID</th>
                    <th scope="col" style="width: 15%;">Nombre</th>
                    <th scope="col" style="width: 20%;">Apellidos</th>
                    <th scope="col" style="width: 20%;">Correo</th>
                    <th scope="col" style="width: 15%;">Rol</th>
                    <th scope="col" style="width: 25%;">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->paterno . ' ' . $user->materno }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->admin ? 'Administrador' : 'Usuario' }}</td>
                    <td>
                        <a href="{{ route('usuarios.show', $user) }}" class="btn btn-info btn-sm me-2">Ver más</a>
                        @if (Auth::user()->admin)
                            <a href="{{ route('usuarios.edit', $user) }}" class="btn btn-secondary btn-sm me-2">Editar</a>
                            <form action="{{ route('usuarios.destroy', $user->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="button" 
                                    class="btn btn-danger btn-sm @if ($user->super) disabled opacity-50 @endif" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#modalEliminar-{{ $user->id }}">
                                    Eliminar
                                </button>          
                            </form>
                            <!-- Modal de eliminación (cada uno con un id único) -->
                            <div class="modal fade" id="modalEliminar-{{ $user->id }}" tabindex="-1" aria-labelledby="modalEliminarLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title fs-5" id="modalEliminarLabel">Confirmar eliminación</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ¿Está seguro de que desea eliminar este usuario?
                                            <br>
                                            <strong>Esta acción no se puede deshacer.</strong>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <!-- Formulario para eliminar el usuario -->
                                            <form action="{{ route('usuarios.destroy', $user->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <!-- Paginación -->
    <div class="d-flex justify-content-center mt-4">
        {{ $users->links('pagination::bootstrap-5') }}
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
@endsection
