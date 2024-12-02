@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- Personalización del header -->
                <div class="card-header text-center">
                    <h2>SAGOP</h2>
                </div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Bienvenido. Nos alegra verte de nuevo.</p>

                    <!-- Botón de continuar centrado -->
                    <div>
                        <form action="{{ route('continuar') }}" method="GET">
                            <button type="submit" class="btn btn-primary">Continuar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
</div>

@endsection
