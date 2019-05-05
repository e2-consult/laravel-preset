<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script>
            window.App = {!! json_encode([
                'csrfToken' => csrf_token(),
                ]) !!};
        </script>

        <!-- Styles -->
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
        @yield('header')
    </head>
    <body class="theme-default bg-page">
        <div id="app">
            @include ('layouts.nav')

            <main class="container mx-auto py-4">
                @yield('content')
            </main>
        </div>

        <!-- Scripts -->
        @yield('scripts')
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
