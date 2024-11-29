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
</head>
<body>
    <div id="app">
        <header>
            @include('partials.nav-bar')
        </header>
        <div class="container mt-4">
            @include('partials.validation-errors')
            @include('partials.messages')
            @yield('content')
        </div>
    </div>
    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</body>
</html>