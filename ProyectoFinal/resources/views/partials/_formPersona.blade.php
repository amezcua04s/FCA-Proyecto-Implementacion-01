@csrf
<div class="mb-3">
    <label for="razon" class="form-label">Razón Social</label>
    <input type="text" class="form-control" id="razon" name="razon" value="{{ old('razon', $persona->razon ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="persona" class="form-label">Tipo de Persona</label>
    <select class="form-select" id="persona" name="persona" required>
        <option selected disabled>Seleccione el tipo de persona.</option>
        <option value="Física" {{ old('persona', $persona->persona ?? '') == 'Física' ? 'selected' : '' }}>Física</option>
        <option value="Moral" {{ old('persona', $persona->persona ?? '') == 'Moral' ? 'selected' : '' }}>Moral</option>
    </select>
</div>
<div class="mb-3">
    <label for="rfc" class="form-label">RFC</label>
    <input type="text" class="form-control" id="rfc" name="rfc" value="{{ old('rfc', $persona->rfc ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="domicilio" class="form-label">Domicilio</label>
    <input type="text" class="form-control" id="domicilio" name="domicilio" value="{{ old('domicilio', $persona->domicilio ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="email" class="form-label">Correo Electrónico</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $persona->email ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="telefono" class="form-label">Teléfono</label>
    <input type="text" class="form-control" id="telefono" name="telefono" value="{{ old('telefono', $persona->telefono ?? '') }}">
</div>

<button type="submit" class="btn btn-primary">Guardar</button>