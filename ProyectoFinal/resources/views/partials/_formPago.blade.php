@csrf
<div class="mb-3">
    <label for="proyecto" class="form-label">Proyecto</label>
    <select class="form-select" aria-label="Proyectos" id="proyecto" name="proyecto" required>
        <option selected disabled>Seleccione un proyecto</option>
          @foreach ($proyectos as $proyecto)
            <option value="{{$proyecto->id}}" @if ($pago->proyecto == $proyecto->id)  selected @endif>
              {{$proyecto->nombre}}
            </option>          
          @endforeach
      </select>
</div>
<div class="mb-3">
    <label for="proveedor" class="form-label">Proveedor</label>
    <select class="form-select" aria-label="proveedores" id="proveedor" name="proveedor" required>
        <option selected disabled>Seleccione un proveedor</option>
          @foreach ($proveedores as $proveedor)
            <option value="{{$proveedor->id}}" @if ($pago->proveedor == $proveedor->id)  selected @endif>
              {{$proveedor->razon}}
            </option>          
          @endforeach
      </select>
</div>
<div class="mb-3">
    <label for="costo_total" class="form-label">Costo Total del Proyecto</label>
    <div class="input-group">
        <span class="input-group-text">$</span>
        <input type="number" class="form-control" id="costo_total" name="costo_total" value="{{ old('costo_total', $pago->proyecto->total ?? '') }}" readonly>
    </div>
</div>
<div class="mb-3">
    <label for="monto" class="form-label">Monto del Pago</label>
    <div class="input-group">
        <span class="input-group-text">$</span>
        <input type="number" class="form-control" id="monto" name="monto" value="{{ old('monto', $pago->monto ?? '') }}" required>
    </div>
</div>
<div class="mb-3">
    <label for="fecha" class="form-label">Fecha</label>
    <input type="date" class="form-control" id="fecha" name="fecha" value="{{ old('fecha', $pago->fecha ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="metodo" class="form-label">Método de Transferencia</label>
    <select class="form-select" id="metodo" name="metodo" required>
        <option selected disabled>Seleccione un método</option>
        <option value="Efectivo" {{ old('metodo', $pago->metodo ?? '') == 'Efectivo' ? 'selected' : '' }}>Efectivo</option>
        <option value="Transferencia" {{ old('metodo', $pago->metodo ?? '') == 'Transferencia' ? 'selected' : '' }}>Transferencia</option>
        <option value="Cheque" {{ old('metodo', $pago->metodo ?? '') == 'Cheque' ? 'selected' : '' }}>Cheque</option>
    </select>
</div>
<div class="mb-3">
    <label for="referencia" class="form-label">Referencia</label>
    <input type="text" class="form-control" id="referencia" name="referencia" value="{{ old('referencia', $pago->referencia ?? '') }}" maxlength="255" required>
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