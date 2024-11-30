@extends('layouts.master')

@section('content')

<form method="POST" action="{{ route('pagos.store', ) }}" autocomplete="off">

    @include('partials._formPago')
</form>

@endsection