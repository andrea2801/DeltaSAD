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
            <h2 class="subtitle-user">Usuario: {{$u->apellidos}}, {{$u->nombre}}</h2>
            <hr class="user-underline">
        </div>
        <div class="d-flex col-md-12">
            <div class="col-6 mt-3 ml-5 border">
                @if(isset($u->dni))
                <p class="text-right">{{$u->dni}}</p>
                @endif
                <p class="font-weight-bold">Dirección:</p>
                <p>{{$u->direccion}}</p>
                @if(isset($u->telefono))
                <p class="font-weight-bold">Teléfono:</p>
                <p>{{$u->telefono}}</p>
                <p class="font-weight-bold">Persona de contacto:</p>
                <p>{{$u->persona_contacto}}</p>
                @endif
                <p class="font-weight-bold">Detalle:</p>
                <p>{{$u->detalle}}</p>
                <p class="font-weight-bold">Tareas:</p>
                <p>{{$u->tareas}}</p>
                @if(isset($u->horas_asignadas))
                <p class="font-weight-bold">Horas asignadas:</p>
                <p>{{$u->horas_asignadas}}</p>
                <p class="font-weight-bold">TF asignada:</p>
                <p>{{$u->tfn}} {{$u->tfa}}</p>
                @endif
            </div>
            @if(isset($notas))

            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">Nota</div>
                <div class="card-body text-primary">
                <p class="card-text">{{$nota->tf}}: {{$nota->nota}}...</p>
                <p class="card-text">El: {{$nota->created_at}}</p>
                </div>
            </div>
            @endif
        @endforeach
        @if(isset($incidencias))
            <div class="col-6 mt-3 ml-5">
                <h2>Incidencias</h2>
            @if(count($incidencias) == 0)
                <p>Usuari@ sin incidencias</p>
            @else
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
                        <td>
                            @if($incidencia->estado == 1)
                            <p>Abierta</p>
                            @else
                            <p>Cerrada</p>
                            @endif
                        </td>
                        <td>{{$incidencia->descripcion}}</td>
                        <td>
                            @if($incidencia->estado == 1)
                            <a href="">Cerrar</a>
                            @else
                            <a href="">Eliminar</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                @endif
            @endif
            @if(isset($evolutivos))
                <div class="col-12 ml-5">
                    <h2>Evolutivos</h2>
                        @if(count($evolutivos) == 0)
                            <p>No hay evolutivos</p>
                        @else
                        @foreach ($evolutivos as $evolutivo)
                            <div class="card border-primary mb-3" style="max-width: 18rem;">
                                <div class="card-header">{{$evolutivo->fecha_creacion}}</div>
                                <div class="card-body text-primary">
                                <h5 class="card-title">Evolución</h5>
                                <p class="card-text">{{substr($evolutivo->descripcion,0, 45)}}...</p>
                                </div>
                            </div>
                        @endforeach
                        @endif
                    @endif
                </div>
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
