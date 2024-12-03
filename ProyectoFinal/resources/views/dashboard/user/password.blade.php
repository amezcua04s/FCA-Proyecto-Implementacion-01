<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Restablecer contraseña</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <style>
        body {
            background-color: #f4f6f9;
            font-family: Arial, sans-serif;
        }
        .card {
            border-radius: 10px;
        }
        .card-header {
            background-color: #617d9c;
            color: #fff;
        }
        .modal-content {
            border-radius: 10px;
        }
        .modal-header {
            background-color: #28a745;
            color: #fff;
        }
        .modal-footer button {
            border-radius: 5px;
        }
    </style>
    <body>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                <div class="card shadow-lg">
                <div class="card-header text-center">
                    <h2 class="mb-4">Restablecer Contraseña</h2>
                </div>
                <div class="card-body">
            <form method="POST" action="{{ route('usuarios.update', $user) }}">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="mb-3 col-4" style="display: none;">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name ?? '') }}" autocomplete="given-name" required>
                    </div>
                    <div class="mb-3 col-4" style="display: none;">
                        <label for="paterno" class="form-label">Apellido paterno</label>
                        <input type="text" class="form-control" id="paterno" name="paterno" value="{{ old('paterno', $user->paterno ?? '') }}" autocomplete="family-name" required>
                    </div>
                    <div class="mb-3 col-4" style="display: none;">
                        <label for="materno" class="form-label">Apellido materno</label>
                        <input type="text" class="form-control" id="materno" name="materno" value="{{ old('materno', $user->materno ?? '') }}" autocomplete="additional-name" required>
                    </div>
                </div>
                <div class="row" style="display: none;">
                    <div class="mb-3 col-12">
                        <label for="email" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email ?? '') }}" autocomplete="email" required>
                    </div>
                </div>
                <div class="row" id="passwordFields">
                    <div class="mb-3 col-md-6 col-sm-12">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" autocomplete="new-password">
                    </div>
                    <div class="mb-3 col-md-6 col-sm-12">
                        <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" autocomplete="new-password">
                    </div>
                </div>
                <div class="mb-3" style="display: none;">
                    <label for="admin" class="form-label">Tipo de Usuario</label>
                    <select class="form-select" aria-label="Tipo de usuario" id="admin" name="admin" autocomplete="off" required>
                        <option selected disabled>Seleccione el tipo de usuario</option>
                        <option value="1" {{ old('admin', $user->admin ?? '') == '1' ? 'selected' : '' }}>Administrador</option>
                        <option value="0" {{ old('admin', $user->admin ?? '') == '0' ? 'selected' : '' }}>Usuario</option>
                    </select>
                </div>
            
                <div class="mb-5">
                    <button type="submit" class="btn btn-primary w-100">Guardar</button>
                </div>
            </form>
        </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    </body>
</html>
