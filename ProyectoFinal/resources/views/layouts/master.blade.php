<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>
<body class="d-flex flex-column min-vh-100">
    <div id="app" class="flex-grow-1">
        <header>
            @include('partials.nav-bar')
        </header>
        <div class="container mt-4">
            @include('partials.validation-errors')
            @include('partials.messages')
            @yield('content')
        </div>
    </div>

    <footer class="bg-dark text-white py-4 mt-auto">
        @include('partials.footer')
    </footer>
    
    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            flatpickr("#fecha_inicio", {
                dateFormat: "Y-m-d"
            });
            flatpickr("#fecha_fin", {
                dateFormat: "Y-m-d"
            });
        });
    </script>
</body>
</html>