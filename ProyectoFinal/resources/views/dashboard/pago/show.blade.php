@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Detalles del Pago</h1>
    <div class="card">
        <div class="card-header">
            <h2>{{ $proyecto->nombre }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Proyecto:</strong> {{ $proyecto->nombre }}</p>
            <p><strong>Proveedor:</strong> {{ $proveedor->razon }}</p>
            <div>
                <p><strong>Monto:</strong> $ {{ $pago->monto }}</p>
                <p><strong>Restante a pagar:</strong> {{ $proyecto->total - $proyecto->pagado }}</p>    
            </div>
            <p><strong>Fecha:</strong> {{ $pago->fecha }}</p>
            <p><strong>Método:</strong> {{ $pago->metodo }}</p>
            <p><strong>Referencia:</strong> {{ $pago->referencia }}</p>
        </div>
        <div class="card-footer">
            <div class="row">
                @if (Auth::user()->admin)
                    <div class="col-12 col-md-4 mb-2">
                        <a href="{{ route('pagos.edit', $pago) }}" class="btn btn-secondary w-100">Editar</a>
                    </div>
                    <div class="col-12 col-md-4 mb-2">
                        <form action="{{ route('pagos.destroy', $pago->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger w-100">Eliminar</button>
                        </form>
                    </div>
                @endif
                <div class="col-12 col-md-4 mb-2">
                    <a href="{{ route('pagos.index') }}" class="btn btn-primary w-100">Volver a la lista</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection