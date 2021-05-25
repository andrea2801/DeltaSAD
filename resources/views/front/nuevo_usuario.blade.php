
@extends('layouts.master')

@section('content')
    <div class="container-fluid p-0 m-0 d-flex usuarios">
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
                                    <div class="form-group row " id="telf_usuario_crear">
                                        <label for="Telf" class="col-4 col-md-1 col-form-label text-md-right">Telèfono</label>

                                        <div class="col-md-12">
                                            <input type="tel" class="form-control telf_usuario_crear" name="Telf" required="" autofocus="">

                                        </div>
                                    </div>
                                    <div class="form-group row " id="percont_usuario_crear">
                                        <label for="persona_contacto" class="col-4 col-md-5 col-form-label text-md-right">Persona de contacto</label>

                                        <div class="col-md-12">
                                            <input type="text" class="form-control percont_usuario_crear" name="persona_contacto" required="" autofocus="">

                                        </div>
                                    </div>
                                    <div class="form-group row " id="hasignadas_usuario_crear">
                                        <label for="zonas" class="col-4 col-md-5 col-form-label text-md-right">Zonas</label>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="col-md-4">
                                                    @php
                                                        use Illuminate\Support\Facades\DB;
                                                        $zones = DB::table('zonas')->select('zonas')->get();
                                                        for($i=0;$i<count($zones);$i++){
                                                           echo "<div class='form-check'>
                                                                    <input class='form-check-input' type='radio' name='".$zones[$i]->zonas."'>".$zones[$i]->zonas."</div>";
                                                        }
                                                        //dd($zones[$i]->zonas) ;
                                                    @endphp

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="form-group row " id="zona_usuario_crear">
                                        <label for="horas_asignadas" class="col-4 col-md-5 col-form-label text-md-right">Horas Asignadas</label>

                                        <div class="col-md-12">
                                            <input type="text" class="form-control hasignadas_usuario_crear" name="horas_asignadas" required="" autofocus="">

                                        </div>
                                    </div>
                                    <div class="form-group row " id="detalle_usuario_crear">
                                        <label for="horas_asignadas" class="col-4 col-md-5 col-form-label text-md-right">Horas Asignadas</label>

                                        <div class="col-md-12">
                                            <input type="text" class="form-control hasignadas_usuario_crear" name="horas_asignadas" required="" autofocus="">

                                        </div>
                                    </div>
                                    <div class="form-group row " id="tareas_usuario_crear">
                                        <label for="horas_asignadas" class="col-4 col-md-5 col-form-label text-md-right">Horas Asignadas</label>

                                        <div class="col-md-12">
                                            <input type="text" class="form-control hasignadas_usuario_crear" name="horas_asignadas" required="" autofocus="">

                                        </div>
                                    </div>
                                    <div class="form-group row " id="tfasig_usuario_crear">
                                        <label for="horas_asignadas" class="col-4 col-md-5 col-form-label text-md-right">Horas Asignadas</label>

                                        <div class="col-md-12">
                                            <input type="text" class="form-control hasignadas_usuario_crear" name="horas_asignadas" required="" autofocus="">

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
