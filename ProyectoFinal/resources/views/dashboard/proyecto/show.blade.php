<div class="container">
    <h1>Detalles del Proyecto</h1>
    <div class="card">
        <div class="card-header">
            <h2>{{ $proyecto->nombre }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Descripción:</strong> {{ $proyecto->descripcion }}</p>
            <p><strong>Fecha de Inicio:</strong> {{ $proyecto->fecha_inicio }}</p>
            <p><strong>Fecha de Fin:</strong> {{ $proyecto->fecha_fin }}</p>
            <p><strong>Costo total:</strong> {{ $proyecto->total }}</p>
            <p><strong>Comentarios:</strong> {{ $proyecto->comentarios }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('proyectos.edit', $proyecto) }}" class="btn btn-secondary">Editar</a>
            <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
            <a href="{{ route('proyectos.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>