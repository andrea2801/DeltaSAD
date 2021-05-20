@extends('layouts.master')

@section('content')
    <div class="container-fluid p-0 m-0 d-flex usuarios">
        @include('front.nav')
        <div class="row">
            <div class="col-12 mt-5 ml-5">
                <h1 class="title-user">TRABAJADORAS</h1>
            </div>
            <div class="col-12 ml-5">
                <h2 class="subtitle-user">Todas las trabajadoras</h2>
                <hr class="user-underline">
            </div>
            <div class="col-12 mt-3 ml-5">
                <p col-12="">Buscar por:</p>
                <div class="row col-md-10">
                    <div class="form-group row dni_trabajadoras col-md-6">
                        <label for="dni" class="col-4 col-md-4 col-form-label text-md-right dni_view">Dni</label>

                        <div class="col-md-6">
                            <input id="dni_search" type="text" class="form-control col-md-12" name="dni" required="" autocomplete="dni">
                        </div>
                    </div>
                    <div class="form-group col-md-6 row dni_trabajadoras">
                        <label for="dni" class="col-12 col-md-4 col-form-label text-md-right select_view">Selecciona:</label>

                        <select class=" col-md-6 form-select" aria-label="Default select example">
                            <option selected="">Zonas</option>
                            <!--solo es prueba, raquel no te enfades-->
                            @php
                                use Illuminate\Support\Facades\DB;
                                $zones = DB::table('zonas')->select('zonas')->get();
                                for($i=0;$i<count($zones);$i++){
                                   echo "<option value='".$zones[$i]->zonas."'>".$zones[$i]->zonas."</option>";
                                }
                                //dd($zones[$i]->zonas) ;
                            @endphp
                        </select>
                    </div>
                </div>



            </div>
            <div class="col-md-8 ml-5 pl-5">
                <table class="table col-md-3">
                    <thead class="thead-dark">
                    <tr>
                        <th>Nombre y apellido</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Zona</th>
                        <th>Horarios</th>
                        <th>Usuarios</th>
                    </tr>
                    </thead>
                   <!--trabajadoras-->
                </table>

            </div>


        </div>

    </div>
@endsection
