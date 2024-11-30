@extends('layouts.master')

@section('content')

<form method="POST" action="{{ route('proyectos.update', $proyecto->id) }}" autocomplete="off">
    @csrf
    @method('PATCH')
    @include('partials._formProyecto')
</form>

@endsection