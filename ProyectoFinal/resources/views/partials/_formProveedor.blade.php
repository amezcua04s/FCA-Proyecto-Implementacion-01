<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Proveedor</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="mt-">
        <h2 class="mb-4">Formulario de Proveedor</h2>
        <form method="POST" action="{{ route('proveedores.store') }}">
            @csrf
            <div class="mb-3">
                <label for="razon" class="form-label">Razón Social</label>
                <input type="text" class="form-control" id="razon" name="razon" value="{{ old('razon', $proveedor->razon ?? '') }}" required>
            </div>
            <div class="mb-3">
                <label for="persona" class="form-label">Tipo de Persona</label>
                <select class="form-select" id="persona" name="persona" required>
                    <option selected disabled>Seleccione el tipo de persona.</option>
                    <option value="Física" {{ old('persona', $proveedor->persona ?? '') == 'Física' ? 'selected' : '' }}>Física</option>
                    <option value="Moral" {{ old('persona', $proveedor->persona ?? '') == 'Moral' ? 'selected' : '' }}>Moral</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="rfc" class="form-label">RFC</label>
                <input type="text" class="form-control" id="rfc" name="rfc" value="{{ old('rfc', $proveedor->rfc ?? '') }}" required>
            </div>
            <div class="mb-3">
                <label for="domicilio" class="form-label">Domicilio</label>
                <input type="text" class="form-control" id="domicilio" name="domicilio" value="{{ old('domicilio', $proveedor->domicilio ?? '') }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $proveedor->email ?? '') }}" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="{{ old('telefono', $proveedor->telefono ?? '') }}" required>
            </div>
            <div class="mb-5">
                <button type="submit" class="btn btn-primary w-100">Guardar</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>