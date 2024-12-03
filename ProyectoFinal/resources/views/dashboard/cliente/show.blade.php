@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Detalles del Cliente</h1>
    <div class="card">
        <div class="card-header">
            <h2>{{ $cliente->nombre }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $cliente->nombre }}</p>
            <p><strong>Tipo de Persona:</strong> {{ $cliente->persona }}</p>
            <p><strong>RFC:</strong> {{ $cliente->rfc }}</p>
            <p><strong>Domicilio:</strong> {{ $cliente->domicilio }}</p>
            <p><strong>Correo Electrónico:</strong> {{ $cliente->email }}</p>
            <p><strong>Teléfono:</strong> {{ $cliente->telefono }}</p>
        </div>
        <div class="card-footer">
            <div class="row">
                @if (Auth::user()->admin)
                    <div class="col-12 col-md-4 mb-2">
                        <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-secondary w-100">Editar</a>
                    </div>
                    <div class="col-12 col-md-4 mb-2">
                        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger w-100">Eliminar</button>
                        </form>
                    </div>
                @endif
                <div class="col-12 col-md-4 mb-2">
                    <a href="{{ route('clientes.index') }}" class="btn btn-primary w-100">Volver a la lista</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection