@extends('layouts.master')

@section('content')
<section>
<div class="container-fluid p-0 m-0 d-flex usuarios">
    <div class="row">
        <div class="col-12 mt-5 ml-5 justify-content-between">
            <h1 class="title-user">Usuarios</h1>
            <a href="" id="baja" data-toggle="modal" data-target="#confirmacion">Dar de baja</a>
        </div>
        @foreach ($usuario as $u )
        <div class="modal fade" id="confirmacion">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <h4>¿Confirmas que quieres eliminar este usuario?</h4>
                        <button type="button" id="baja" value="{{$u->id}}"><a href="/usuario/eliminar/{{$u->id}}">Si</a></button>
                        <button type="button" data-dismiss="modal">No</button>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-12 ml-5">
            <h2 class="subtitle-user">Usuario: {{$u->apellidos}}, {{$u->nombre}}</h2>
            <hr>
        </div>
        <div class="d-flex col-md-12">
            <div class="col-6 mt-3 ml-5 border">
                @if (Auth::user()->rol_id == 1 || Auth::user()->rol_id == 3 )
                <form class="userForm" method="GET" action={{route('update')}}>
                    <input type="hidden" name="id" value={{$u->id}}>
                    <button type="button" class="btn btn-link" id="update">Modificar usuario</button>
                    <p class="text-right" on>{{$u->dni}}</p>
                    <div class="d-flex">
                        <label>Modificar dni</label>
                        <input type="text" name="dni" class="userForm" value={{$u->dni}}>
                    </div>
                    <p class="font-weight-bold">Dirección:</p>
                    <p>{{$u->direccion}}</p>
                    <div class="d-flex">
                        <label>Modificar dirección</label>
                        <input type="text" name="direccion" class="userForm" value={{$u->direccion}}>
                    </div>
                    <p class="font-weight-bold">Teléfono:</p>
                    <p>{{$u->telefono}}</p>
                    <div class="d-flex">
                        <label>Modificar teléfono</label>
                        <input type="number" name="telf" class="userForm" value={{$u->telefono}}>
                    </div>
                    <p class="font-weight-bold">Persona de contacto:</p>
                    <p>{{$u->persona_contacto}}</p>
                    <div class="d-flex">
                        <label>Modificar contacto</label>
                        <input type="text" name="contacto" class="userForm" value={{$u->persona_contacto}}>
                    </div>
                    <p class="font-weight-bold">Detalle:</p>
                    <p>{{$u->detalle}}</p>
                    <div class="d-flex">
                        <label>Modificar detalle</label>
                        <input type="text" name="detalle" class="userForm" value={{$u->detalle}}>
                    </div>
                    <p class="font-weight-bold">Tareas:</p>
                    <p>{{$u->tareas}}</p>
                    <div class="d-flex">
                        <label>Modificar tareas</label>
                        <input type="text" name="tareas" class="userForm" value={{$u->tareas}}>
                    </div>
                    <p class="font-weight-bold">Horas asignadas:</p>
                    <p>{{$u->horas_asignadas}}</p>
                    <div class="d-flex">
                        <label>Modificar horas</label>
                        <input type="number" name="horas" class="userForm" value={{$u->horas_asignadas}}>
                    </div>
                    <p class="font-weight-bold">TF asignada:</p>
                    <p>{{$u->tfn}} {{$u->tfa}}</p>
                    <div class="d-flex flex-column">
                        <label>Elegir nueva TF</label>
                        <select name="tf">
                            @foreach ($tfs as $tf )
                            <option value={{$tf->id}}>{{$tf->nombre}} {{$tf->apellidos}}</option>
                            @endforeach
                        </select>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Guardar cambios">
                </form>

                @else
                    <p class="text-right">{{$u->nombre}}</p>
                    <p class="font-weight-bold">Dirección:</p>
                    <p>{{$u->direccion}}</p>
                    <p class="font-weight-bold">Detalle:</p>
                    <p>{{$u->detalle}}</p>
                    <p class="font-weight-bold">Tareas:</p>
                    <p>{{$u->tareas}}</p>
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
                <div class="d-flex justify-content-around">
                    <h2>Incidencias</h2>
                    <a href="#" class="card-link" data-toggle="modal" data-target="#incidencias">
                        <img class="mas" src="{{asset('img/icons/mas.png')}}" alt="mas">
                    </a>
                </div>
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
                            <a href="/cerrar/{{$incidencia->idi}}">Cerrar</a>
                            @else
                            <a href="/eliminar/{{$incidencia->idi}}">Eliminar</a>
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
                    <div class="d-flex justify-content-around">
                        <h2>Evolutivos</h2>
                        <a href="#" class="card-link" data-toggle="modal" data-target="#evolutivos">
                            <img class="mas" src="{{asset('img/icons/mas.png')}}" alt="mas">
                        </a>
                    </div>
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
</div>


<div class="modal fade" id="incidencias">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 >Nueva incidencia</h4>
            </div>
            <div class="modal-body">
                <form action="{{route('crear.incidencia')}}" method="GET" class="form needs-validation" novalidate>
                    <div class="form-group row">
                        <label for="descripcion" class="col-sm-2 col-form-label">Descripción:</label>
                        <div class="col-sm-12">
                            <textarea name="descripcion" type="textarea" class="form-control" required rows="4"></textarea>
                            <div class="invalid-feedback">
                                Añadir descripción.
                            </div>
                        </div>
                        @foreach ($usuario as $u )
                        <input type="hidden" name="usuario" value="{{$u->id}}">
                        @endforeach
                        @foreach ($tfs as $tf )
                            <input type="hidden" name="tf" value={{$tf->id}}>
                        @endforeach
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="evolutivos">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 >Nuevo evolutivo</h4>
            </div>
            <div class="modal-body">
                <form action="{{route('crear.evolutivo')}}" method="GET" class="form needs-validation" novalidate>
                    @foreach ($usuario as $u )
                    <div class="form-group row">
                        <label for="evolucion" class="col-sm-12 col-form-label">Evolución de {{$u->nombre}} {{$u->apellidos}}:</label>
                        <div class="col-sm-12">
                            <textarea name="evolucion" type="textarea" class="form-control" required rows="4"></textarea>
                            <div class="invalid-feedback">
                                Añadir evolutivo.
                            </div>
                        </div>
                        <input type="hidden" name="usuario" value="{{$u->id}}">
                        @foreach ($tfs as $tf )
                            <input type="hidden" name="tf" value={{$tf->id}}>
                        @endforeach
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </div>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
</div>



</section>
@endsection
