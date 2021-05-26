
@extends('layouts.master')

@section('content')
    <div class="container-fluid p-0 m-0 d-flex usuarios">
        <div class="row">
            <div class="col-12 mt-5 ml-5">
                <h1 class="title-user">USUARIOS</h1>
            </div>
            <div class="col-12 ml-5">
                <div class="row">
                <h2 class="subtitle-user col-md-6">Lista usuarios</h2>
                    <button class="btn col-md-4 botton_general float-left mt-5">Nuevo usuario</button>
                </div>
                <hr class="user-underline">
            </div>
            <div class="row ml-5">
                <div class="col-12">
                    <div class="col-md-12">
                        <form method="POST" action="">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group row float-left" id="BusquedaDNI">
                                        <label for="BusquedaDNI" class="col-md-4 col-form-label text-md-right">Buscar por Dni:</label>

                                        <div class="col-md-8">
                                            <input type="text" class="form-control BusquedaDNI  input_general " name="nombre" required="" autofocus="">

                                        </div>
                                    </div>
                                    <div class="col-md-12" id="bloque_form_usuario">
                                        <div class="form-group " id="crear_usuario">
                                            <label for="Nombre" class="col-md-1 col-form-label text-md-left">Nombre</label>

                                            <div class="col-md-5">
                                                <input type="text" class="form-control nombre_usuario_crear input_general " name="nombre" required="" autofocus="">

                                            </div>


                                            <label for="Apellidos" class="col-md-1 col-form-label text-md-left">Apellidos</label>

                                            <div class="col-md-5">
                                                <input type="text" class="form-control apellidos_usuario_crear input_general" name="apellidos" required="" autofocus="">

                                            </div>


                                            <label for="Dirección" class="col-md-1 col-form-label text-md-right">Dirección</label>

                                            <div class="col-md-5">
                                                <input type="text" class="form-control direccion_usuario_crear input_general" name="direccion" required="" autofocus="">

                                            </div>


                                            <label for="DNI" class="col-md-1 col-form-label text-md-right">Dni</label>

                                            <div class="col-md-5 ">
                                                <input type="text" class="form-control dni_usuario_crear input_general" name="dni" required="" autofocus="">

                                            </div>


                                            <label for="Telf" class="col-md-1 col-form-label text-md-right">Telèfono</label>

                                            <div class="col-md-11">
                                                <input type="tel" class="col-md-5 form-control telf_usuario_crear input_general" name="Telf" required="" autofocus="">

                                            </div>

                                            <label for="horas_asignadas" class="col-md-2 col-form-label text-md-left">Horas Asignadas</label>

                                            <div class="col-md-4">
                                                <input type="text" class="form-control hasignadas_usuario_crear input_general" name="horas_asignadas" required="" autofocus="">

                                            </div>
                                            <label for="persona_contacto" class=" col-md-2 col-form-label text-md-right">Persona de contacto</label>

                                            <div class="col-md-4">
                                                <input type="text" class="form-control percont_usuario_crear input_general" name="persona_contacto" required="" autofocus="">

                                            </div>


                                            <label for="detalles" class="col-md-2 col-form-label text-md-left">Detalles</label>

                                            <div class="col-md-12">
                                                <textarea class="form-control detalle_usuario_crear input_general"  rows="auto"></textarea>
                                            </div>


                                            <label for="horas_asignadas" class="col-md-1 col-form-label text-md-left">Tareas</label>

                                            <div class="col-md-12">
                                                <textarea class="form-control tareas_usuario_crear input_general"  rows="auto"></textarea>
                                            </div>

                                            <label for="zonas" class="col-md-12
                                         col-form-label text-md-left">Zonas</label>

                                            <div class="row pt-3">
                                                <div class="col-12">
                                                    <div class="col-md-12">
                                                        @php
                                                            use Illuminate\Support\Facades\DB;
                                                            $zones = DB::table('zonas')->select('zonas')->get();
                                                            for($i=0;$i<count($zones);$i++){
                                                               echo "<div class='form-check col-md-2'>
                                                                        <input class='form-check-input col-md-1 zonas_input' type='radio' name='zonas' value='".$zones[$i]->zonas."'>
                                                                        <label for='zonas' class='col-md-11 col-form-label text-md-left'>".$zones[$i]->zonas."</label>
                                                                        </div>";
                                                            }
                                                            //dd($zones[$i]->zonas) ;
                                                        @endphp

                                                    </div>
                                                </div>
                                            </div>


                                            <label for="horas_asignadas" class="col-4 col-md-5 col-form-label text-md-left">TF Asignadas</label>

                                            <div class="col-md-12">
                                                @php
                                                    $tf = DB::table('users')->select('nombre')->where('rol_id',2)->get();
                                                    for($i=0;$i<count($tf);$i++){
                                                       echo "<div class='form-check form-check-inline'>
                                                    <input class='form-check-input' type='checkbox'  value='".$tf[$i]->nombre."'>
                                                    <label class='form-check-label' for='".$tf[$i]->nombre."'>".$tf[$i]->nombre."</label>
                                                </div>";
                                                    }
                                                    //dd($zones[$i]->zonas) ;
                                                @endphp


                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-2 mt-5 ml-5 float-right">


                                        <div class="col-md-10">
                                            <button type="submit" class="btn col-10 col-md-10 botton_general">
                                                Añadir
                                            </button>
                                        </div>
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
