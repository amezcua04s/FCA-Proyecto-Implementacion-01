@csrf
<div class="mb-3">
    <label for="proyecto" class="form-label">Proyecto</label>
    <select class="form-select" aria-label="Proyectos" id="proyecto" name="proyecto" required>
        <option selected disabled>Seleccione un proyecto</option>
        @foreach ($proyectos as $proyecto)
            <option value="{{ $proyecto->id }}" @if (old('proyecto', $anticipo->proyecto_id ?? '') == $proyecto->id) selected @endif>
                {{ $proyecto->nombre }}
            </option>
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label for="cliente" class="form-label">Cliente</label>
    <select class="form-select" aria-label="Clientes" id="cliente" name="cliente" required>
        <option selected disabled>Seleccione un cliente</option>
        @foreach ($clientes as $cliente)
            <option value="{{ $cliente->id }}" @if (old('cliente', $anticipo->cliente_id ?? '') == $cliente->id) selected @endif>
                {{ $cliente->razon }}
            </option>
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label for="costo_total" class="form-label">Costo Total del Proyecto</label>
    <div class="input-group">
        <span class="input-group-text">$</span>
        <input type="number" class="form-control" id="costo_total" name="costo_total" value="{{ old('costo_total', $anticipo->proyecto->total ?? '') }}" readonly>
    </div>
</div>
<div class="mb-3">
    <label for="monto" class="form-label">Monto del Anticipo</label>
    <div class="input-group">
        <span class="input-group-text">$</span>
        <input type="number" class="form-control" id="monto" name="monto" value="{{ old('monto', $anticipo->monto ?? '') }}" required>
    </div>
</div>
<div class="mb-3">
    <label for="fecha" class="form-label">Fecha</label>
    <input type="date" class="form-control" id="fecha" name="fecha" value="{{ old('fecha', $anticipo->fecha ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="metodo" class="form-label">Método de Transferencia</label>
    <select class="form-select" id="metodo" name="metodo" required>
        <option value="Efectivo" {{ old('metodo', $anticipo->metodo ?? '') == 'Efectivo' ? 'selected' : '' }}>Efectivo</option>
        <option value="Transferencia" {{ old('metodo', $anticipo->metodo ?? '') == 'Transferencia' ? 'selected' : '' }}>Transferencia</option>
        <option value="Cheque" {{ old('metodo', $anticipo->metodo ?? '') == 'Cheque' ? 'selected' : '' }}>Cheque</option>
    </select>
</div>
<div class="mb-3">
    <label for="referencia" class="form-label">Referencia</label>
    <input type="text" class="form-control" id="referencia" name="referencia" value="{{ old('referencia', $anticipo->referencia ?? '') }}" maxlength="255" required>
</div>
<div class="mb-5">
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const fechaInput = document.getElementById('fecha');
        flatpickr(fechaInput, {
            dateFormat: "Y-m-d"
        });

        const proyectoSelect = document.getElementById('proyecto');
        const costoTotalInput = document.getElementById('costo_total');

        const proyectos = @json($proyectos);

        proyectoSelect.addEventListener('change', function () {
            const selectedOption = proyectoSelect.options[proyectoSelect.selectedIndex];
            const selectedProyecto = proyectos.find(proyecto => proyecto.id == selectedOption.value);
            if (selectedProyecto) {
                costoTotalInput.value = selectedProyecto.total;
            }
        });

        if (proyectoSelect.value) {
            proyectoSelect.dispatchEvent(new Event('change'));
        }
    });
</script>