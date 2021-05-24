
@extends('layouts.master')

@section('content')
    <div class="container-fluid p-0 m-0 d-flex usuarios">
        @include('front.nav')
        <div class="row">
            <div class="col-12 mt-5 ml-5">
                <h1 class="title-user">USUARIOS</h1>
            </div>
            <div class="col-12 ml-5">
                <h2 class="subtitle-user">Nuevo usuario</h2>
                <hr class="user-underline">
            </div>
            <div class="row ml-5">
                <div class="col-12">
                    <div class="col-md-12">
                        <form method="POST" action="">
                            @csrf
                            <div class="col-12">
                                <div class="col-md-7 p-5" id="bloque_form_usuario">
                                    <div class="form-group row " id="nombre_usuario_crear">
                                        <label for="Nombre" class="col-4 col-md-2 col-form-label text-md-right">Nombre</label>

                                        <div class="col-md-12">
                                            <input type="text" class="form-control nombre_usuario_crear" name="nombre" required="" autofocus="">

                                        </div>
                                    </div>
                                    <div class="form-group row " id="apellido_usuario_crear">
                                        <label for="Apellidos" class="col-4 col-md-2 col-form-label text-md-right">Apellidos</label>

                                        <div class="col-md-12">
                                            <input type="text" class="form-control apellidos_usuario_crear" name="apellidos" required="" autofocus="">

                                        </div>
                                    </div>
                                    <div class="form-group row " id="direccion_usuario_crear">
                                        <label for="Dirección" class="col-4 col-md-3 col-form-label text-md-right">Dirección</label>

                                        <div class="col-md-12">
                                            <input type="text" class="form-control direccion_usuario_crear" name="direccion" required="" autofocus="">

                                        </div>
                                    </div>
                                    <div class="form-group row " id="dni_usuario_crear">
                                        <label for="DNI" class="col-4 col-md-1 col-form-label text-md-right">Dni</label>

                                        <div class="col-md-12">
                                            <input type="text" class="form-control dni_usuario_crear" name="dni" required="" autofocus="">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group row " id="adjuntar_archivo">
                                        <label for="Archivo" class="col-4 col-md-3 col-form-label text-md-right">Foto</label>

                                        <div class="col-md-10">
                                            <input type="text" ng-model="archivo" class="form-control" value="Adjuntar archivo">
                                            <input type="file" name="archivo" value="archivo" size="80">

                                        </div>
                                    </div>

                                    <div class="col-md-10">
                                        <button type="submit" class="btn col-10 col-md-10 botton_general botton_login">
                                            Añadir
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>




        </div>

    </div>
@endsection
