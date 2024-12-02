@extends('layouts.master')

@section('content')

<form method="POST" action="{{ route('clientes.update', $persona->id) }}" autocomplete="off">
    @csrf
    @method('PATCH')
    @include('partials._formCliente')
</form>

@endsection