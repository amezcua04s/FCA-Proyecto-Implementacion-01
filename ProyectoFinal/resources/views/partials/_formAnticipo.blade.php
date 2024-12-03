<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Anticipo</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- flatpickr CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="mt-0">
        <h2 class="mb-4">Anticipo</h2>
        <form method="POST" action="{{ route('anticipos.store') }}" id="anticipoForm">
            @csrf
            <div class="mb-3">
                <label for="proyecto" class="form-label">Proyecto</label>
                <select class="form-select" aria-label="proyectos" id="proyecto" name="proyecto" required>
                    <option selected disabled>Seleccione un proyecto</option>
                    @foreach ($proyectos as $proyecto)
                        <option value="{{$proyecto->id}}" data-total="{{$proyecto->total}}" data-anticipado="{{$proyecto->anticipado}}" @if (old('proyecto', $anticipo->proyecto ?? '') == $proyecto->id) selected @endif>
                            {{$proyecto->nombre}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="cliente" class="form-label">Cliente</label>
                <select class="form-select" aria-label="Clientes" id="cliente" name="cliente" required>
                    <option selected disabled>Seleccione un cliente</option>
                    @foreach ($clientes as $cliente)
                        <option value="{{$cliente->id}}" @if (old('cliente', $anticipo->cliente ?? '') == $cliente->id) selected @endif>
                            {{$cliente->razon}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="row container mt-0">
                <div class="col col-md-6 mb-3">
                    <label for="anticipado" class="form-label">Anticipos realizados en este proyecto</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" class="form-control" id="anticipado" name="anticipado" value=0 readonly>
                    </div>
                </div>
                <div class="col col-md-6 mb-3">
                    <label for="monto" class="form-label">Monto del anticipo</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" class="form-control" id="monto" name="monto" value="{{ old('monto', $anticipo->monto ?? '') }}" required>
                    </div>
                </div>
                <div class="col col-md-6 mb-3">
                    <label for="costo_total" class="form-label">Costo total del Proyecto</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" class="form-control" id="costo_total" name="costo_total" value=0 readonly>
                    </div>
                </div>
                <div class="col col-md-6 mb-3">
                    <label for="porAntcipar" class="form-label">Por anticipar</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" class="form-control" id="porAnticipar" name="porAnticipar" value=0 readonly>
                    </div>
                    <small class="error-message" id="error-message" value="false">El monto del anticipo no puede ser mayor que lo restante por anticipar.</small>
                </div>
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="text" class="form-control datepicker" id="fecha" name="fecha" value="{{ old('fecha', $anticipo->fecha ?? '') }}" required>
            </div>
            <div class="mb-3">
                <label for="metodo" class="form-label">Método</label>
                <select class="form-select" aria-label="Método de pago" id="metodo" name="metodo" required>
                    <option selected disabled>Seleccione el método de pago</option>
                    <option value="Deposito" {{ old('metodo', $anticipo->metodo ?? '') == 'deposito' ? 'selected' : '' }}>Depósito</option>
                    <option value="Transferencia" {{ old('metodo', $anticipo->metodo ?? '') == 'transferencia' ? 'selected' : '' }}>Transferencia</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="referencia" class="form-label">Referencia</label>
                <input type="text" class="form-control" id="referencia" name="referencia" value="{{ old('referencia', $anticipo->referencia ?? '') }}" required>
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

            const proyectoSelect = document.getElementById('proyecto');
            const costoTotalInput = document.getElementById('costo_total');
            const anticipadoInput = document.getElementById('anticipado');
            const porAnticiparInput = document.getElementById('porAnticipar');
            const montoInput = document.getElementById('monto');
            const anticipoForm = document.getElementById('anticipoForm');
            const errorMessage = document.getElementById('error-message');

            proyectoSelect.addEventListener('change', function() {
                const selectedOption = this.options[this.selectedIndex];
                const total = selectedOption.getAttribute('data-total');
                const anticipado = selectedOption.getAttribute('data-anticipado');
                costoTotalInput.value = total;
                anticipadoInput.value = anticipado;
                porAnticiparInput.value = total - anticipado;
            });

            montoInput.addEventListener('input', function() {
                const monto = parseFloat(montoInput.value) || 0;
                const total = parseFloat(costoTotalInput.value) || 0;
                const anticipado = parseFloat(anticipadoInput.value) || 0;
                const porAnticipar = total - anticipado - monto;
                porAnticiparInput.value = porAnticipar;

                if (porAnticipar < 0) {
                    errorMessage.style.display = 'block';
                } else {
                    errorMessage.style.display = 'none';
                }
            });

            anticipoForm.addEventListener('submit', function(event) {
                const porAnticipar = parseFloat(porAnticiparInput.value);

                if (porAnticipar < 0) {
                    event.preventDefault();
                    alert('El monto del nuevo anticipo no puede ser mayor que el valor por anticipar.');
                }
            });

            if (proyectoSelect.value) {
                proyectoSelect.dispatchEvent(new Event('change'));
            }
        });
    </script>
</body>
</html>