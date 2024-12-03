@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Editar anticipo</h1>
    <form method="POST" action="{{ route('anticipos.update', $anticipo->id) }}">
        @csrf
        @method('PATCH')
        @include('partials._formAnticipo')
    </form>
</div>
@endsection