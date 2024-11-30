@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Crear nuevo anticipo</h1>
    <form method="POST" action="{{ route('anticipos.store') }}">
        @include('partials._formAnticipo')
    </form>
</div>
@endsection