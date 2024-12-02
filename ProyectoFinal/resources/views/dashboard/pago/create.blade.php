@extends('layouts.master')

@section('content')

<form method="POST" action="{{ route('pagos.store', ) }}" autocomplete="off">
    @csrf
    @include('partials._formPago')
</form>

@endsection