<form method="POST" action="{{ route('proveedores.store') }}">
    @csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $proyecto->nombre ?? '') }}" required>
    </div>
    <div class="mb-3">
        <label for="concepto" class="form-label">Descripción</label>
        <textarea class="form-control" id="concepto" name="concepto" maxlength="1000">{{ old('concepto', $proyecto->concepto ?? '') }}</textarea>
    </div>
    <div class="mb-3">
        <label for="fecha_inicio" class="form-label">Fecha de Inicio</label>
        <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" value="{{ old('fecha_inicio', $proyecto->fecha_inicio ?? '') }}" required>
    </div>
    <div class="mb-3">
        <label for="fecha_fin" class="form-label">Fecha de Fin</label>
        <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" value="{{ old('fecha_fin', $proyecto->fecha_fin ?? '') }}" required>
    </div>
    <div class="mb-3">
        <label for="subtotal" class="form-label">Subtotal</label>
        <div class="input-group">
            <span class="input-group-text">$</span>
            <input type="number" class="form-control" id="subtotal" name="subtotal" value="{{ old('subtotal', $proyecto->subtotal ?? '') }}" required>
        </div>
    </div>
    <div class="mb-3">
        <label for="iva" class="form-label">IVA</label>
        <div class="input-group">
            <span class="input-group-text">$</span>
            <input type="number" class="form-control" id="iva" name="iva" value="{{ old('iva', $proyecto->iva ?? '') }}" readonly>
        </div>
    </div>
    <div class="mb-3">
        <label for="total" class="form-label">Total</label>
        <div class="input-group">
            <span class="input-group-text">$</span>
            <input type="number" class="form-control" id="total" name="total" value="{{ old('total', $proyecto->total ?? '') }}" readonly>
        </div>
    </div>
    <div class="mb-3">
        <label for="comentarios" class="form-label">Comentarios</label>
        <textarea class="form-control" id="comentarios" name="comentarios" maxlength="500">{{ old('comentarios', $proyecto->comentarios ?? '') }}</textarea>
    </div>
    <div class="mb-5">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const fechaInicioInput = document.getElementById('fecha_inicio');
        const fechaFinInput = document.getElementById('fecha_fin');

        flatpickr(fechaInicioInput, {
            dateFormat: "Y-m-d"
        });

        flatpickr(fechaFinInput, {
            dateFormat: "Y-m-d"
        });

        const subtotalInput = document.getElementById('subtotal');
        const ivaInput = document.getElementById('iva');
        const totalInput = document.getElementById('total');

        function calculateValues() {
            const subtotal = parseFloat(subtotalInput.value) || 0;
            const iva = subtotal * 0.16;
            const total = subtotal + iva;

            ivaInput.value = iva.toFixed(2);
            totalInput.value = total.toFixed(2);
        }

        subtotalInput.addEventListener('input', calculateValues);
    });
</script>