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
                <p col-12>Buscar por:</p>
                <div class="form-group row dni_trabajadoras">
                    <label for="dni" class="col-4 col-md-1 col-form-label text-md-right dni_view">{{ __('Dni') }}</label>

                    <div class="col-md-10">
                        <input id="dni_search" type="text" class="form-control col-md-3" name="dni" required autocomplete="dni">
                    </div>
                </div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Zonas</option>
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
        <div class="row">
            <div class="col-6 ml-5">
                <p>Esto será la paginacion</p>
            </div>
        </div>
    </div>
@endsection
