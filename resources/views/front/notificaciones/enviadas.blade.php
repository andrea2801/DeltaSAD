@extends('layouts.master')
@include('front.notificaciones.nueva_noti', ['users' => $users])
@include('front.notificaciones.popUpNotificacionNueva', ['users' => $users])
@section('content')
<section class="notificaciones">
    <div class="row container-principal">
        <div class="col-12">
            <div class="row d-flex align-items-center justify-content-center mb-5">
                <div class="col-12 text-center col-md-8 text-md-left">
                    <p class="home-title">NOTIFICACIONES ENVIADAS</p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="#">
                            <button class="btn btn-general" id="nuevaNotificacion" data-toggle="modal" data-target="#nuevaNoti">Crear nueva</button>
                        </a>
                    </div>
                </div>
            </div>
            @if(isset($notificaciones))
            @if(count($notificaciones) != 0)
            @foreach ($notificaciones as $n )
            <div class="row d-flex justify-content-center">
                <div class="col-10">
                    <p class="first-home-txt">Enviadas</p>
                    <hr>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Para:</th>
                                <th>Asunto:</th>
                                <th>Prioridad:</th>
                                <th>Fecha:</th>
                                <th>Abrir:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>{{$n->nombre}} {{$n->apellidos}}</th>
                                <th>{{$n->asunto}}</th>
                                <th>
                                    @if ($n->prioridad == 0)
                                        Normal
                                    @else
                                        Alta
                                    @endif
                                </th>
                                <th>{{$n->fecha}}</th>
                                <th class="d-flex justify-content-center">
                                    <a href="">
                                        <img class="mas" src="{{asset('img/icons/mas.png')}}" alt="mas">
                                    </a>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-10 d-flex justify-content-end">
                    <p class="text-mostrar">Mostrar más
                        <a href="">
                            <img class="arrow" src="{{asset('img/icons/flecha_abajo.png')}}" alt="flecha abajo">
                        </a>
                    </p>
                </div>
            </div>
            @endforeach
            @else
                    <script type="text/javascript">
                       Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'No tienes notificaciones enviadas'
                        })
                    </script>
            @endif
            @endif
        </div>
    </div>
</section>
@endsection
