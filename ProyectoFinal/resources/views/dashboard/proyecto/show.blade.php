@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Detalles del Proyecto</h1>
    <div class="card">
        <div class="card-header">
            <h2>{{ $proyecto->nombre }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Nombre del Proyecto:</strong> {{ $proyecto->nombre }}</p>
            <p><strong>Concepto:</strong> {{ $proyecto->concepto }}</p>
            <p><strong>Fecha de Inicio:</strong> {{ $proyecto->fecha_inicio }}</p>
            <p><strong>Fecha de Fin:</strong> {{ $proyecto->fecha_fin }}</p>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Total:</strong> ${{ number_format($proyecto->total, 2) }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Total:</strong> ${{ number_format($proyecto->total, 2) }}</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Pagado:</strong> ${{ number_format($proyecto->pagado, 2) }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Anticipado:</strong> ${{ number_format($proyecto->anticipado, 2) }}</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Por Pagar:</strong> ${{ number_format($proyecto->total - $proyecto->pagado, 2) }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Por anticipar:</strong> ${{ number_format($proyecto->total - $proyecto->anticipado, 2) }}</p>
                </div>
            </div>
            <hr>
            <p><strong>Comentarios:</strong> {{ $proyecto->comentarios }}</p>
        </div>
        <div class="card-footer">
            <div class="row">
                @if (Auth::user()->admin)
                    <div class="col-12 col-md-4 mb-2">
                        <a href="{{ route('proyectos.edit', $proyecto) }}" class="btn btn-secondary w-100">Editar</a>
                    </div>
                    <div class="col-12 col-md-4 mb-2">
                        <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger w-100">Eliminar</button>
                        </form>
                    </div>
                @endif
                <div class="col-12 col-md-4 mb-2">
                    <a href="{{ route('proyectos.index') }}" class="btn btn-primary w-100">Volver a la lista</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection