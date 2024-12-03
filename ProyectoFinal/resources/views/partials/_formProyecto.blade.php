<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Proyecto</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- flatpickr CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div class="mt-0">
        <h2 class="mb-4">Proyecto</h2>
        <form method="POST" action="{{ route('proveedores.store') }}">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del Proyecto</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $proyecto->nombre ?? '') }}" required>
            </div>
            <div class="mb-3">
                <label for="concepto" class="form-label">Descripción</label>
                <textarea class="form-control" id="concepto" name="concepto" maxlength="1000" rows="1">{{ old('concepto', $proyecto->concepto ?? '') }}</textarea>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="inicio" class="form-label">Fecha de Inicio</label>
                    <input type="text" class="form-control datepicker" id="inicio" name="inicio" value="{{ old('inicio', $proyecto->inicio ?? '') }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="fin" class="form-label">Fecha de Fin</label>
                    <input type="text" class="form-control datepicker" id="fin" name="fin" value="{{ old('fin', $proyecto->fin ?? '') }}" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="subtotal" class="form-label">Subtotal</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" class="form-control" id="subtotal" name="subtotal" value="{{ old('subtotal', $proyecto->subtotal ?? '') }}" required>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="iva" class="form-label">IVA</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" class="form-control" id="iva" name="iva" value="{{ old('iva', $proyecto->iva ?? '') }}" readonly>
                    </div>
                    <small class="form-text">A razón del 16%</small>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="total" class="form-label">Total</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" class="form-control" id="total" name="total" value="{{ old('total', $proyecto->total ?? '') }}" readonly>
                    </div>
                    <small class="form-text">Costo final con un IVA del 16%</small>
                </div>
            </div>
            <div class="row container mt-0">
                <div class="col col-md-4 mb-3">
                    <label for="pagado" class="form-label">Pagado</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" class="form-control" id="pagado" name="pagado" value="{{ old('pagado', $proyecto->pagado ?? 0) }}" readonly>
                    </div>
                </div>
                <div class="col col-md-4 mb-3">
                    <label for="porPagar" class="form-label">Por pagar</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" class="form-control" id="porPagar" name="porPagar" value="{{ old('porPagar', ($proyecto->total ?? 0) - ($proyecto->pagado ?? 0) ) }}" readonly>
                    </div>
                </div>
                <div class="col col-md-4  mb-3">
                    <label for="anticipado" class="form-label">Anticipado</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" class="form-control" id="anticipado" name="anticipado" value="{{ old('anticipado', $proyecto->anticipado ?? 0) }}" readonly>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="comentarios" class="form-label">Comentarios</label>
                <textarea class="form-control" id="comentarios" name="comentarios" maxlength="500" rows="2">{{ old('comentarios', $proyecto->comentarios ?? '') }}</textarea>
            </div>
            <div class="mb-5">
                <button type="submit" class="btn btn-primary w-100">Guardar</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!-- Initialize flatpickr -->
    <script>
        $(document).ready(function() {
            flatpickr('.datepicker', {
                dateFormat: 'Y-m-d',
                altInput: true,
                altFormat: 'F j, Y',
                allowInput: true
            });

            const subtotalInput = document.getElementById('subtotal');
            const ivaInput = document.getElementById('iva');
            const totalInput = document.getElementById('total');
            const pagadoInput = document.getElementById('pagado');
            const anticipadoInput = document.getElementById('anticipado');
            const porPagarInput = document.getElementById('porPagar');

            function calculateValues() {
                const subtotal = parseFloat(subtotalInput.value) || 0;
                const iva = subtotal * 0.16;
                const total = subtotal + iva;

                ivaInput.value = iva.toFixed(2);
                totalInput.value = total.toFixed(2);
                porPagarInput.value = (total - pagadoInput.value).toFixed(2);
            }

            subtotalInput.addEventListener('input', calculateValues);
        });
    </script>
</body>
</html>
