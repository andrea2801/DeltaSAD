@extends('layouts.master')
@include('front.notificaciones.nueva_noti', ['users' => $users])
@section('content')
<section>
    <div class="row container-principal">
        <div class="col-12">
            <div class="row d-flex align-items-center justify-content-center mb-5">
                <div class="col-6">
                    <p class="home-title">NOTIFICACIONES RECIBIDAS</p>
                </div>
                <div class="col-2">
                    <a href="{{route('notificaciones.enviadas')}}">
                        <button class="btn btn-general">Ver enviadas</button>
                    </a>
                </div>
                <div class="col-2">
                    <a href="#">
                        <button class="btn btn-general" id="nuevaNotificacion" data-toggle="modal" data-target="#nuevaNoti">Crear nueva</button>
                    </a>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-10">
                    <p class="first-home-txt">Nuevas</p>
                    <hr>
                    @if(isset($new))
                        @if(count($new) != 0)
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>De:</th>
                                        <th>Asunto:</th>
                                        <th>Prioridad:</th>
                                        <th>Fecha:</th>
                                        <th>Abrir:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($new as $notification )
                                        <tr>
                                            <th>{{$notification->nombre}} {{$notification->apellidos}}</th>
                                            <th>{{$notification->asunto}}</th>
                                            <th>
                                                @if($notification->prioridad = 0)
                                                    Media
                                                @else
                                                    Alta
                                                @endif
                                            </th>
                                            <th>{{$notification->fecha}}</th>
                                            <th class="d-flex justify-content-center">
                                                <a href="">
                                                    <img class="mas" src="{{asset('img/icons/mas.png')}}" alt="mas"/>
                                                </a>
                                            </th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                        <p>No tienes notificaciones nuevas</p>
                    @endif
                </div>
                <div class="col-10 d-flex justify-content-end">
                    <p class="text-mostrar">Mostrar más
                        <a href="">
                            <img class="arrow" src="{{asset('img/icons/flecha_abajo.png')}}" alt="flecha abajo">
                        </a>
                    </p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-10">
                    <p class="first-home-txt">Leídas</p>
                    <hr>
                    @if(isset($pending))
                        @if(count($pending) != 0)
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>De:</th>
                                        <th>Asunto:</th>
                                        <th>Prioridad:</th>
                                        <th>Fecha:</th>
                                        <th>Abrir:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pending as $notification )
                                        <tr>
                                            <th>{{$notification->nombre}} {{$notification->apellidos}}</th>
                                            <th>{{$notification->asunto}}</th>
                                            <th>
                                                @if($notification->prioridad = 0)
                                                    Media
                                                @else
                                                    Alta
                                                @endif
                                            </th>
                                            <th>{{$notification->fecha}}</th>
                                            <th class="d-flex justify-content-center">
                                                <a href="">
                                                    <img class="mas" src="{{asset('img/icons/mas.png')}}" alt="mas"/>
                                                </a>
                                            </th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                        <p>No tienes notificaciones leídas</p>
                    @endif
                </div>
                <div class="col-10 d-flex justify-content-end">
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
