@extends('layouts.master')

@section('content')
    <form method="POST" action="{{ route('anticipos.store') }}">
        @include('partials._formAnticipo')
    </form>
</div>
@endsection