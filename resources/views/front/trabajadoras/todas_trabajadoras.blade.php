@extends('layouts.master')

@section('content')
<div class="container-fluid p-0 m-0 d-flex usuarios">
    <div class="row">
        <div class="col-12 mt-5 ml-5">
            <h1 class="title-user">TRABAJADORAS</h1>
        </div>
        <div class="col-12 ml-5">
            <h2 class="subtitle-user">Todas las trabajadoras</h2>
            <hr class="user-underline">
        </div>
        <div class="row">
            <div class="col-12">
            </div>
        </div>
        <div class="col-12 mt-3 ml-5 " id="filtrar_block">
            <p class="col-md-auto">Buscar por:</p>
            <div class="row ml-5">
                <div class="col-12">
                    <div class="col-md-12">
                        <div class="col-md-5">
                            <div class="form-group row dni_trabajadoras ">
                                <div class="col-12">
                                    <div class="col-md-12">
                                        <label for="dni"
                                            class="col-4 col-md-4 col-form-label text-md-right dni_view">{{ __('Dni:') }}</label>
                                        <div class="col-md-6">
                                            <input id="dni_search" type="text" class="form-control col-md-8" name="dni"
                                                required="" autocomplete="dni">
                                            <img class="buscar_dni col-md-4" src="{{asset('img/icons/buscar.png')}}"
                                                alt="buscar">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group  row zona_trabajadoras">
                                <div class="col-12">
                                    <div class="col-md-12">
                                        <label for="zonas"
                                            class="col-12 col-md-4 col-form-label text-md-right select_view">{{ __('Zonas:') }}</label>

                                            <select id="select_zonas" class=" col-md-6 form-select"
                                                aria-label="Default select example" name="select_zonas">
                                                <option selected="" value="default">Selecciona</option>
                                                @foreach ($zonas as $zona)
                                                <option value='{{$zona->id}}'>{{$zona->zonas}}</option>
                                                @endforeach
                                            </select>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 ml-5 pl-5" id="tabla_filtrar">
            <table class="table col-md-3">
                <thead class="tabla_trabajadoras">
                    <tr>
                        <th>Nombre y apellido</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Zona</th>
                        <th class="ver_usuarios" >Usuarios</th>
                        <th colspan="2">Opciones</th>
                    </tr>
                </thead>
                <tbody class="info_filtrar">

                </tbody>

                <!--trabajadoras-->
            </table>

        </div>

    </div>

    <div class="modal fade" id="usuario">
        <div class="modal-dialog">
            <div id="usuariocontent" class="modal-content">
            </div>
        </div>
    </div>

    @include('front.trabajadoras.trabajadora_editar')



</div>
<!-- Pendiente que funcione desde app.js-->
<script>
    function usuarios(id) {
         $.ajax({
             url: "{{Route('trabajadoras.showTFusers')}}",
             data:`id=${id}`,
             type: "GET",
             success: function (data) {
                 $("#usuariocontent").html(data);
             }
         });
     }
     function trabajadoras(id) {
         $.ajax({
            url: "{{Route('trabajadoras.edit')}}",
             data:`id=${id}`,
             type: "GET",
             success: function (data) {
                 console.log(data);
                 var nombre=data[0].nombre;
                 var apellidos=data[0].apellidos;
                 var email=data[0].email;
                 var telefono=data[0].telefono;
                 var zona=data[0].zona;
                 var id=data[0].id;
                $("#update_employee input[name=nombre]").val(nombre);
                $("#update_employee input[name=apellidos]").val(apellidos);
                $("#update_employee input[name=telefono]").val(telefono);
                $("#update_employee input[name=email]").val(email);
                var $radios = $('#update_employee input:radio[name=zona]');
                $radios.filter('[value='+zona+']').prop('checked', true);
                $("#update_employee input[name=id]").val(id);

             }
         });
     }
 </script>
@include('layouts.footer')
@endsection
