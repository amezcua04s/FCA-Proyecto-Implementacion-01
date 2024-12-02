<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario de Usuario</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="mt-0">
            <h2 class="mb-4">Formulario de Usuario</h2>
            <form method="POST" action="{{ route('usuarios.store') }}">
                @csrf
                <div class="row">
                    <div class="mb-3 col-4">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name ?? '') }}" autocomplete="given-name" required>
                    </div>
                    <div class="mb-3 col-4">
                        <label for="paterno" class="form-label">Apellido paterno</label>
                        <input type="text" class="form-control" id="paterno" name="paterno" value="{{ old('paterno', $user->paterno ?? '') }}" autocomplete="family-name" required>
                    </div>
                    <div class="mb-3 col-4">
                        <label for="materno" class="form-label">Apellido materno</label>
                        <input type="text" class="form-control" id="materno" name="materno" value="{{ old('materno', $user->materno ?? '') }}" autocomplete="additional-name" required>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-12">
                        <label for="email" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email ?? '') }}" autocomplete="email" required>
                    </div>
                </div>
                <div class="row" id="passwordFields" style="display: false;">
                    <div class="mb-3 col-md-6 col-sm-12">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" autocomplete="new-password">
                    </div>
                    <div class="mb-3 col-md-6 col-sm-12">
                        <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" autocomplete="new-password">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="admin" class="form-label">Tipo de Usuario</label>
                    <select class="form-select" aria-label="Tipo de usuario" id="admin" name="admin" autocomplete="off" required>
                        <option selected disabled>Seleccione el tipo de usuario</option>
                        <option value="1" {{ old('admin', $user->admin ?? '') == '1' ? 'selected' : '' }}>Administrador</option>
                        <option value="0" {{ old('admin', $user->admin ?? '') == '0' ? 'selected' : '' }}>Usuario</option>
                    </select>
                </div>
                
                <button type="button" class="btn btn-danger btn-sm" onclick="generarContrasena()" data-bs-toggle="modal" data-bs-target="#modalRestablecer">
                    Restablecer contraseña
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modalRestablecer" tabindex="-1" aria-labelledby="modalRestablecer" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalRestablecer">Nueva contraseña</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                La nueva contraseña para el usuario es:
                                <p><strong>Nueva Contraseña:</strong> <span id="nuevaCon"></span></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Continuar</button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-5 mt-3">
                    <button type="submit" class="btn btn-primary w-100">Guardar</button>
                </div>
            </form>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

        <script>
            function generarContrasena() {
            var caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+";
            var longitud = 8;
            var contrasena = "";
            
            // Generar contraseña aleatoria de longitud 8
            for (var i = 0; i < longitud; i++) {
                var aleatorio = Math.floor(Math.random() * caracteres.length);
                contrasena += caracteres.charAt(aleatorio);
            }
            
            // Mostrar la contraseña generada en el HTML
            document.getElementById("nuevaCon").textContent = contrasena;

            document.getElementById("password").value = contrasena;
            document.getElementById("password_confirmation").value = contrasena;
        }
               
        </script>
    </body>
</html>