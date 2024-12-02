@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Detalles del Proveedor</h1>
    <div class="card">
        <div class="card-header">
            <h2>{{ $proveedor->razon }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Razón Social:</strong> {{ $proveedor->razon }}</p>
            <p><strong>Tipo de Persona:</strong> {{ $proveedor->persona }}</p>
            <p><strong>RFC:</strong> {{ $proveedor->rfc }}</p>
            <p><strong>Domicilio:</strong> {{ $proveedor->domicilio }}</p>
            <p><strong>Correo Electrónico:</strong> {{ $proveedor->email }}</p>
            <p><strong>Teléfono:</strong> {{ $proveedor->telefono }}</p>
        </div>
        <div class="card-footer">
            <div class="row">
                @if (Auth::user()->admin)
                    <div class="col-12 col-md-4 mb-2">
                        <a href="{{ route('proveedores.edit', $proveedor) }}" class="btn btn-secondary w-100">Editar</a>
                    </div>
                    <div class="col-12 col-md-4 mb-2">
                        <form action="{{ route('proveedores.destroy', $proveedor->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger w-100">Eliminar</button>
                        </form>
                    </div>
                @endif
                <div class="col-12 col-md-4 mb-2">
                    <a href="{{ route('proveedores.index') }}" class="btn btn-primary w-100">Volver a la lista</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection