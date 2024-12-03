@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Bienvenido de nuevo {{ $user->name }}</h1>
    <div class="card">
        <div class="card-header">
            <h2>{{ $user->name}}</h2>
        </div>
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $user->name }}</p>
            <p><strong>Apellidos:</strong> {{ $user->paterno . ' ' . $user->materno }}</p>
            <p><strong>Tipo de usuario:</strong> {{ $user->admin ?'Administrador' : 'Usuario' }}</p>
            <p><strong>Correo:</strong> {{ $user->email }}</p>
        </div>
        <div class="card-footer">
                @csrf
                @method('PATCH')
                <div class="row" id="old" style="display: none;">
                    <div class="form-group mb-3" >
                        <input type="text" class="form-control" id="materno" name="materno" value="{{ old('materno', $user->materno) }}" visible=false>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="paterno" name="paterno" value="{{ old('paterno', $user->paterno) }}" visible=false>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" visible=false>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" visible=false>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="admin" name="admin" value="{{ old('admin', $user->admin) }}" visible=false>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="super" name="super" value="{{ old('materno', $user->super) }}" visible=false>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" id="restablecer" name="restablecer" value="{{ old('restablecer', $user->materno) }}" visible=false>
                    </div>

                </div>
                <div class="form-group mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" autocomplete="new-password">
                </div>
                <div class="form-group mb-3">
                    <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" autocomplete="new-password">
                </div>
                <button type="submit" class="btn btn-primary">Actualizar Contraseña</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection