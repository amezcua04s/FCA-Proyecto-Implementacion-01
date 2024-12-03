@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Detalles del Anticipo</h1>
    <div class="card">
        <div class="card-header">
            <h2>Anticipo del proyecto {{ $anticipo->proyectoNombre }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Proyecto:</strong> {{ $anticipo->proyectoNombre }}</p>
            <p><strong>Cliente:</strong> {{ $anticipo->clienteRazon }}</p>
            <div>
                <p><strong>Monto:</strong> $ {{ $anticipo->monto }}</p>
                <p><strong>Restante por anticipar:</strong> {{ $anticipo->proyectoTotal - $anticipo->proyectoAnticipado }}</p>    
            </div>
            <p><strong>Fecha:</strong> {{ $anticipo->fecha }}</p>
            <p><strong>Método:</strong> {{ $anticipo->metodo }}</p>
            <p><strong>Referencia:</strong> {{ $anticipo->referencia }}</p>
        </div>
        <div class="card-footer">
            <div class="row">
                @if (Auth::user()->admin)
                    <div class="col-12 col-md-4 mb-2">
                        <a href="{{ route('anticipos.edit', $anticipo) }}" class="btn btn-secondary w-100">Editar</a>
                    </div>
                    <div class="col-12 col-md-4 mb-2">
                        <form action="{{ route('anticipos.destroy', $anticipo->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger w-100">Eliminar</button>
                        </form>
                    </div>
                @endif
                <div class="col-12 col-md-4 mb-2">
                    <a href="{{ route('anticipos.index') }}" class="btn btn-primary w-100">Volver a la lista</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection