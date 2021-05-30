@extends('layouts.master')
@section('content')
<section class="usuarios_ts">
    <div class="row container-principal">
        <div class="col-12">
            <div class="row d-flex align-items-center justify-content-center mb-3">
                <div class="col-12 col-md-10">
                    <p class="title-search">Usuarios</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-10">
                    <p class="subtitle-search">Nuevo Usuario</p>
                    <hr>
                </div>
            </div>
            <div class="row d-flex">
                <div class="row d-flex justify-content-center mt-5">
                    <div class="col-10 container-border p-5">
                        <div class="row p-5">
                            <div class="col-12">
                                <p class="content-text">Apellido y Nombre:</p>
                            </div>
                            <div class="col-12 mb-2">
                                <input class="info-content text-general p-2" type="text">
                            </div>
                            <div class="col-12">
                                <p class="content-text">Dirección:</p>
                            </div>
                            <div class="col-12 mb-2">
                                <input class="info-content text-general p-2" type="text">
                            </div>
                            <div class="col-12 mt-2 mb-2">
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-2">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-12 col-md-4">
                                                <p class="content-text">DNI:</p>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <input class="info-content text-general p-2" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-12 col-md-4">
                                                <p class="content-text">Telefóno:</p>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <input class="info-content input-num text-general p-2" type="number">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <p class="content-text">Persona de contacto:</p>
                            </div>
                            <div class="col-12 mb-2">
                                <input class="info-content text-general p-2" type="text">
                            </div>
                            <div class="col-12">
                                <p class="content-text">Horas asignadas:</p>
                            </div>
                            <div class="col-12 mb-2">
                                <input class="info-content text-general p-2" type="text">
                            </div>
                            <div class="col-12">
                                <p class="content-text">Detalle:</p>
                            </div>
                            <div class="col-12 mb-2">
                                <textarea class="txtarea-write info-content text-general p-2" rows="3"></textarea>
                            </div>
                            <div class="col-12">
                                <p class="content-text">Tareas:</p>
                            </div>
                            <div class="col-12 mb-2">
                                <textarea class="txtarea-write info-content text-general p-2" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</section>
@endsection
