@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Lista de Usuarios</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Admin</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($users as $user)
            <tr>
                <th scope="rowgroup">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->admin }}</td>
                <td>
                    <a href="{{ route('usuarios.edit', $user) }}" class="btn btn-secondary">Editar</a>
                    <form action="{{ route('usuarios.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }} <!-- Enlaces de paginación -->
</div>
@endsection