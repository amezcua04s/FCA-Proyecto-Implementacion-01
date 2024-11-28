@extends('layouts.master')

@section('content')

<form method="POST" action="{{route('user.store')}}">

  @include('partials._form')

@endsection