@extends('layouts.master')

@section('content')

<form method="POST" action="{{route('proveedores.store')}}" autocomplete="off">
  @csrf
  @include('partials._formProveedor')
</form>

@endsection