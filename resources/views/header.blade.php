<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        .border{
                border:1px #000 solid;
        }
    </style>
        
        <script type="text/javascript">
<script type="text/javascript">  </script>
</script>   


</head>
<body>
<div class="container p-3">

        <div class="header row  justify-content-center">
            <div class="logo col-2">
                <a href=""> <img class="col-md" src="{{asset('img/Logo2.png')}}"></a>
            </div>
            <div class="usuario col-6 p-4 text-left">
                 <h3>Bienvenido/a <span> "Usuario"</span></h3>
            </div>
            <div class="date col-2 p-4">
            <h4><script type="text/JavaScript"> var f = new Date(); document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear()); </script></h4>
            </div>
            <div class="col-2 p-4 text-center">
                    <span><h3>Salir<a href=""><img class="col-md" style="width:50px;" src="{{asset('img/logout.png')}}"></a></h3></span>
            </div>
            
        </div>
</div>

@extends('layouts.footer')
</body>
</html>