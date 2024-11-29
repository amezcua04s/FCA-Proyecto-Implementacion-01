@csrf
<div class="mb-3">
  <label for="name" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name )}}" autocomplete="name">
</div>
<div class="row">
  <div class="mb-3 col-12 col-sm-12 col-md-6 col-xl-3">
    <label for="email" class="form-label">Correo</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email)}}" autocomplete="email">
  </div>
</div>
<div class="mb-3">
  <label for="password" class="form-label">Contraseña</label>
  <input type="password" class="form-control" id="password" name="password" autocomplete="new-password">
</div>
<div class="mb-3">
  <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
  <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" autocomplete="new-password">
</div>
<div class="mb-3 form-check">
  <input type="hidden" name="admin" value="0">
  <input type="checkbox" class="form-check-input" id="admin" name="admin" value="1" {{ $user->admin ? 'checked' : '' }} autocomplete="off">
  <label class="form-check-label" for="admin">Rol</label>
</div>
<button type="submit" class="btn btn-primary">Guardar</button>