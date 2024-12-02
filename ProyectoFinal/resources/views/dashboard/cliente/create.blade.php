@extends('layouts.master')

@section('content')

<form method="POST" action="{{ route('clientes.store') }}" autocomplete="off">
    @csrf
    @include('partials._formCliente')
</form>

@endsection