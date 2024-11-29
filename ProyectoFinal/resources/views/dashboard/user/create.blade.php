@extends('layouts.master')

@section('content')

<form method="POST" action="{{route('user.store')}}">
  @csrf
  @include('partials._formUser')
</form>

@endsection