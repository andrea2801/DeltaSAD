<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DeltaSAD') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
    <script src="{{asset('js/jquery.min.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">


</head>
<body class="body_login">
    <div class="row">
        <div class="col-12">
            <div class="row mt-5">
                <div class="col-7 popup p-3 ">
                    <div class="row">
                        <div class="col-11">
                            <p>Porfavor pongase en contacto con su cordinador/a para restaurar sus credenciales. Grácias.</p>
                        </div>
                        <div class="col-1 close_login d-flex justify-content-end">
                            <img class="close-icon" src="{{asset('img/icons/X.png')}}" alt="Close">
                        </div>
                    </div>
                </div>
            </div>
            <div id="app">
                @yield('content')
            </div>
        </div>
    </div>

</body>
</html>
