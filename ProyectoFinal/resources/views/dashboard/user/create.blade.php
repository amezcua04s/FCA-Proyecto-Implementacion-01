@extends('layouts.master')

@section('content')

<form method="POST" action="{{route('usuarios.store')}}" autocomplete="off">
  @csrf
  @include('partials._formUser')
</form>

@endsection