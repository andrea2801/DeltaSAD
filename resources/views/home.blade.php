@extends('layouts.master')

@section('content')
<section class="notificaciones">
    <div class="row container-principal">
        <div class="col-12">
            <div class="row d-flex align-items-center justify-content-center mb-5">
                <div class="col-12 text-center col-md-8 text-md-left">
                    <p class="home-title">NOTIFICACIONES RECIBIDAS</p>
                </div>
                <div class="row">
                    <div class="col-6">
                        <a href="{{route('notificaciones.enviadas')}}">
                            <button class="btn btn-general">Ver enviadas</button>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="{{route('notificaciones.nueva')}}">
                            <button class="btn btn-general">Crear nueva</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-10">
                    <p class="first-home-txt">Nuevas</p>
                    <hr>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>De:</th>
                                <th>Asunto:</th>
                                <th class="oculta">Prioridad:</th>
                                <th class="oculta">Fecha:</th>
                                <th>Abrir:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>textoPrueba</th>
                                <th>textoPrueba</th>
                                <th class="oculta">textoPrueba</th>
                                <th class="oculta">textoPrueba</th>
                                <th class="d-flex justify-content-center">
                                    <a href="">
                                        <img class="mas" src="{{asset('img/icons/mas.png')}}" alt="mas">
                                    </a>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12 col-md-10 d-flex justify-content-end">
                    <p class="text-mostrar">Mostrar más
                        <a href="">
                            <img class="arrow" src="{{asset('img/icons/flecha_abajo.png')}}" alt="flecha abajo">
                        </a>
                    </p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-10">
                    <p class="first-home-txt">Pendientes</p>
                    <hr>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>De:</th>
                                <th>Asunto:</th>
                                <th class="oculta">Prioridad:</th>
                                <th class="oculta">Fecha:</th>
                                <th>Abrir:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>textoPrueba</th>
                                <th>textoPrueba</th>
                                <th class="oculta">textoPrueba</th>
                                <th class="oculta">textoPrueba</th>
                                <th class="d-flex justify-content-center">
                                    <a href="">
                                        <img class="mas" src="{{asset('img/icons/mas.png')}}" alt="mas">
                                    </a>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12 col-md-10 d-flex justify-content-end">
                    <p class="text-mostrar">Mostrar más
                        <a href="">
                            <img class="arrow" src="{{asset('img/icons/flecha_abajo.png')}}" alt="flecha abajo">
                        </a>
                    </p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-10">
                    <p class="first-home-txt">Resueltas</p>
                    <hr>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>De:</th>
                                <th>Asunto:</th>
                                <th class="oculta">Prioridad:</th>
                                <th class="oculta">Fecha:</th>
                                <th>Abrir:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>textoPrueba</th>
                                <th>textoPrueba</th>
                                <th class="oculta">textoPrueba</th>
                                <th class="oculta">textoPrueba</th>
                                <th class="d-flex justify-content-center">
                                    <a href="">
                                        <img class="mas" src="{{asset('img/icons/mas.png')}}" alt="mas">
                                    </a>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12 col-md-10 d-flex justify-content-end">
                    <p class="text-mostrar">Mostrar más
                        <a href="">
                            <img class="arrow" src="{{asset('img/icons/flecha_abajo.png')}}" alt="flecha abajo">
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
