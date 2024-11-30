@extends('layouts.master')

@section('content')

<form method="POST" action="{{ route('proveedores.update', $persona->id) }}" autocomplete="off">
    @csrf
    @method('PATCH')
    @include('partials._formPersona')
</form>

@endsection