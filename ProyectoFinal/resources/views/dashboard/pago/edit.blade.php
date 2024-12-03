@extends('layouts.master')

@section('content')

<form method="POST" action="{{ route('pagos.update', $anticipo->id) }}" autocomplete="off">
    @csrf
    @method('PATCH')
    @include('partials._formPago')
</form>

@endsection