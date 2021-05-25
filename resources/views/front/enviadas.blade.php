@extends('layouts.master')

@section('content')
<section>
    <div class="row container-principal">
        <div class="col-12">
            <div class="row d-flex align-items-center justify-content-center mb-5">
                <div class="col-10">
                    <p class="home-title">NOTIFICACIONES ENVIADAS</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-10">
                    <p class="first-home-txt">Enviadas</p>
                    <hr>
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
                            <tr>
                                <th>textoPrueba</th>
                                <th>textoPrueba</th>
                                <th>textoPrueba</th>
                                <th>textoPrueba</th>
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
        </div>
    </div>
</section>
@endsection
