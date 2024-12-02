@extends('layouts.master')

@section('content')
<div class="container">
    <h1 class="text-center">Detalles del Usuario</h1>
    <div class="card">
        <div class="card-header text-center">
            <h2>{{ $user->name}}</h2>
        </div>
        <div class="card-body text">
            <p><strong>Nombre:</strong> {{ $user->name }}</p>
            <p><strong>Apellidos:</strong> {{ $user->paterno . ' ' . $user->materno }}</p>
            <p><strong>Tipo de usuario:</strong> {{ $user->admin ?'Administrador' : 'Usuario' }}</p>
            <p><strong>Correo:</strong> {{ $user->email }}</p>
        </div>
        <div class="card-footer">
            <div class="row">
                
                <div class="col-12 col-md-4 mb-2">
                    <a href="{{ route('usuarios.index') }}" class="btn btn-primary w-100">Volver a la lista</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection