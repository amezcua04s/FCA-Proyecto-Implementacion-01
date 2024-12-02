<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #ffffff;
            color: #000001;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
            color: #343a40; /* Color más tenue y oscuro */
            font-family: 'Arial', sans-serif; /* Fuente diferente */
        }

        .links > a {
            color: #ffffff;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .nav-link {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            padding: 1rem;
            background-color: #fff;
            border-radius: 0.5rem;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Sombra */
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            text-decoration: none;
            color: #007bff;
            box-shadow: 0px 14px 34px rgba(0, 0, 0, 0.2); /* Sombra más intensa al pasar el ratón */
        }

        .nav-link img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .nav-link h2 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #343a40; /* Color más tenue y oscuro */
        }

        .nav-link i {
            font-size: 2rem;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <div class="dropdown mt-1">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                                <a class="dropdown-item" href="{{ route('usuarios.show', Auth::user()->id) }}">
                                    Perfil
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Salir
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                SAGOP
            </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 mb-4">
                            <div class="nav-link">
                                <a href="{{ route('usuarios.index') }}">
                                    <img src="https://cdn-icons-png.flaticon.com/512/17/17004.png" alt="Usuarios">
                                    <h2>Usuarios</h2>
                                 </a>
                             </div>
                         </div>
                        <div class="col-12 col-md-6 mb-4">
                            <div class="nav-link">
                                <a href="{{ route('proveedores.index') }}">
                                    <img src="https://media.istockphoto.com/id/1180028723/vector/phone-with-waves-symbol-icon-black-simple-isolated-vector-stock-illustration.jpg?s=612x612&w=0&k=20&c=0t-EGRLmVQvE6gDdbAw3XWm0G84ODOkYG_HnUrJM09I=" alt="Proveedores">
                                    <h2>Proveedores</h2>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-4">
                            <div class="nav-link">
                                <a href="{{ route('clientes.index') }}">
                                    <img src="https://img.freepik.com/vector-premium/imagen-vectorial-icono-apoyo-comunidad-puede-usar-caridad_120816-342146.jpg?w=360" alt="Clientes">
                                    <h2>Clientes</h2>                                    </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-4">
                            <div class="nav-link">
                                <a href="{{ route('proyectos.index') }}">
                                    <img src="https://png.pngtree.com/png-vector/20190721/ourmid/pngtree-checklist-icon-for-your-project-png-image_1560043.jpg" alt="Proyectos">
                                    <h2>Proyectos</h2>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-4">
                            <div class="nav-link">
                                <a href="{{ route('anticipos.index') }}">
                                    <img src="https://png.pngtree.com/png-vector/20220730/ourlarge/pngtree-payment-icon-black-background-invest-share-vector-png-image_19327728.jpg" alt="Anticipos">
                                    <h2>Anticipos</h2>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-4">
                            <div class="nav-link">
                                <a href="{{ route('pagos.index') }}">
                                    <img src="https://st5.depositphotos.com/24613802/69022/v/450/depositphotos_690228558-stock-illustration-wallet-icon-simple-style.jpg" alt="Pagos">
                                    <h2>Pagos</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @include('partials.footer')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>