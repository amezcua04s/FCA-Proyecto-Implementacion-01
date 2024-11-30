@extends('layouts.master')

@section('content')

<form method="POST" action="{{ route('proyectos.store') }}" autocomplete="off">
    @csrf
    @include('partials._formProyecto')
</form>

@endsection