@extends('layouts.master')

@section('content')

<form method="POST" action="{{ route('usuarios.update', $user->id) }}" autocomplete="off">
    @csrf
    @method('PATCH')
    @include('partials._formUser')
</form>

@endsection