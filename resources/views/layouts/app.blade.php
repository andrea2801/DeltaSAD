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
<body style="background-image: url('/img/login/fondo.jpg');background-size: cover;">

<div class="row  col-md-12">
    <div class="popup col-md-7 mt-5">
    <div class="col-md-1 close_login"> <img class="  col-1" src="{{asset('img/icons/X.png')}} " alt="Close"></div>
    <div class="col-md-11 p-3"><p>Porfavor pongase en contacto con su cordinador/a para restaurar sus credenciales. Grácias.</p></div>
</div>
</div>
    <div id="app">
        <main class="py-12">

            @yield('content')
        </main>
    </div>
<div class="col-md-2 footer_login">
    <p>© Copyright 2001 DeltaSAD</p>
</div>
    <script>
        $(document).ready(function (){
            //animacion block dni
            $("input#dni_input_login").click(function (){
                $(".dni_mov").animate({top: "16px"}, 500)
            });
            //animacion block password
            $("input#password_input_login").click(function (){
                $(".pass_mov").animate({top: "95px"}, 500)
            });
            //forgot password
            $(".forgot_password").click(function (){
                $(this).css("color","#50B2CE");
                $(".popup").css("display","block");
            });
            $(".close_login").click(function (){
                $(".popup").css("display","none");
            })
        });

    </script>
</body>
</html>
