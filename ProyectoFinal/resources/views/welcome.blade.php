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
            background-color: #4c4747;
            color: #adbec6;
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
        }

        .links > a {
            color: #636b6f;
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
            box-shadow: 0px 14px 34px 0px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            text-decoration: none;
            color: #000;
            box-shadow: 0px 14px 34px 0px rgba(0, 0, 0, 0.2);
        }

        .nav-link img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .nav-link h2 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #000;
        }
    </style>
</head>
<body>
    <div class="flex-center position-ref">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Salir
                            </a>
                        </li>
                    </div>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
      

        <div class="content flex-full">
            <div class="title m-b-md">
                Laravel
                <font-awesome-icon icon="fa-solid fa-phone-volume" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="nav-link">
                            <a href="{{ route('usuarios.index') }}">
                                <i class="fas fa-users"></i>
                                <img src="https://cdn-icons-png.flaticon.com/512/17/17004.png" alt="Usuarios">
                                <h2>Usuarios</h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="nav-link">
                            <a href="{{ route('proveedores.index') }}">
                                <img src="https://png.pngtree.com/png-vector/20191028/ourmid/pngtree-trolley-icon-isolated-on-abstract-background-png-image_1901088.jpg" alt="Proveedores">
                                <h2>Proveedores</h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="nav-link">
                            <a href="{{ route('clientes.index') }}">
                                <img src="cccccccccccccccccccccccccccccc" alt="Clientes">
                                <h2>Clientes</h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="nav-link">
                            <a href="{{ route('proyectos.index') }}">
                                <img src="https://png.pngtree.com/png-vector/20190721/ourmid/pngtree-checklist-icon-for-your-project-png-image_1560043.jpg" alt="Proyectos">
                                <h2>Proyectos</h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="nav-link">
                            <a href="{{ route('anticipos.index') }}">
                                <img src="aaaaaaaaaaaaaaaaaaaaaaaaaaaa" alt="Anticipos">
                                <h2>Anticipos</h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="nav-link">
                            <a href="{{ route('pagos.index') }}">
                                <img src="ppppppppppppppppppppppppppppppppp" alt="Pagos">
                                <h2>Pagos</h2>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @include('partials.footer')    

        </div>
    </div>

    <!-- Bootstrap JS (necessary for dropdown) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>