@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Lista de pagos</h1>
    <div class="mb-3">
        <a href="{{ route('pagos.create') }}" class="btn btn-primary">Crear nuevo pago</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Proyecto</th>
                <th>Proveedor</th>
                <th>Monto</th>
                <th>Fecha</th>
                <th>Referencia</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($pagos as $pago)
            <tr>
                <th scope="row">{{ $pago->id }}</th>
                <td>{{ $pago->proyecto }}</td>
                <td>{{ $pago->proveedor }}</td>
                <td>{{ $pago->monto }}</td>
                <td>{{ $pago->fecha }}</td>
                <td>{{ $pago->referencia }}</td>
                <td>
                    <a href="{{ route('pagos.show', $pago) }}" class="btn btn-info">Ver más</a>
                    <a href="{{ route('pagos.edit', $pago) }}" class="btn btn-secondary">Editar</a>
                    <form action="{{ route('pagos.destroy', $pago->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $pagos->links() }} <!-- Enlaces de paginación -->
</div>
@endsection