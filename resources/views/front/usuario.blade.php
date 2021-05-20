@extends('layouts.master')

@section('content')
<div class="container-fluid p-0 m-0 d-flex usuarios">
    @include('front.nav')
    <div class="row">
        <div class="col-12 mt-5 ml-5">
            <h1 class="title-user">Usuarios</h1>
        </div>
        @foreach ($usuario as $u )
        <div class="col-12 ml-5">
            <h2 class="subtitle-user">Usuario: {{$u->apellidos}},{{$u->nombre}}</h2>
            <hr class="user-underline">
        </div>
        <div class="d-flex col-md-12">
            <div class="col-6 mt-3 ml-5">
                <p>{{$u->dni}}</p>
                <p>{{$u->direccion}}</p>
                <p>{{$u->telefono}}</p>
                <p>{{$u->detalle}}</p>
                <p>{{$u->tareas}}</p>
            </div>
        @endforeach
            <div  class="col-6 mt-3 ml-5">
                @if(isset($incidencias))
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col-2">Fecha</th>
                        <th scope="col-2">Estado</th>
                        <th scope="col-6">Descipcion</th>
                        <th scope="col-2">Opciones</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($incidencias as $incidencia )
                        <tr>
                            <td>{{$incidencia->fecha}}</td>
                            <td>{{$incidencia->estado}}</td>
                            <td>{{$incidencia->descripcion}}</td>
                            <td><a>Cerrar</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6 ml-5">
            <p>Esto será la paginacion</p>
        </div>
    </div>
</div>
@endsection
