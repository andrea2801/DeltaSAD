@if(isset($usuario))

@include('front.usuarios_trabajadora.coordinadora.popUpEvolutivos', ['usuario' => $usuario, 'tfs' => $tfs])
@include('front.usuarios_trabajadora.coordinadora.popUpIncidencias', ['usuario' => $usuario, 'tfs' => $tfs])
@include('front.usuarios_trabajadora.coordinadora.popUpVerEvolutiva')
<div class="row">
    <div class="col-md-12">
        @foreach ($usuario as $u )
        <form class="userForm col-md-5 p-5 bloque_general" method="GET" action={{route('update')}}>
            <input type="hidden" name="id" value={{$u->id}}>

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
            <input class="btn btn-primary botton_general float-right mt-5" type="submit" value="Guardar cambios">
        </form>
        @endforeach
        @endif
        <div class="col-md-6 mt-3 ml-5">
            <div class="d-flex justify-content-around">
                <h2>Incidencias</h2>
                <a href="#" class="card-link mt-5" data-toggle="modal" data-target="#incidencias">
                    <img class="mas" src="{{asset('img/icons/mas.png')}}" alt="mas">
                </a>
            </div>
            @if(isset($incidencias))
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
                        <td>{{$incidencia->created_at}}</td>
                        <td>
                            @if($incidencia->estado == 0)
                            <p>Abierta</p>
                            @else
                            <p>Cerrada</p>
                            @endif
                        </td>
                        <td>{{$incidencia->descripcion}}</td>
                        <td>
                            @if($incidencia->estado == 0)
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

        </div>
    </div>
</div>

<div class="col-md-11 mt-3 ml-5">
    @if(isset($evolutivos))
    <div class="col-12 ml-5">
        <div class=" col-md-12">
            <div class=" col-md-12">
                <h2 class="col-md-1 mr-3">Evolutivos</h2>

                <a href="#" class="card-link col-md-1" data-toggle="modal" data-target="#evolutivos">
                    <img class="mas mt-5" src="{{asset('img/icons/mas.png')}}" alt="mas">
                </a>
            </div>
            <hr class="user-underline col-md-11">
        </div>
        @if(count($evolutivos) == 0)
        <p>No hay evolutivos</p>
        @else
        @foreach ($evolutivos as $evolutivo)
        <div class="card border-primary mb-3 p-0 col-md-5 mr-4 ml-5" style="max-width: 18rem;">
            <div class="card-header header_popup">{{$evolutivo->fecha_creacion}}</div>
            <div class="card-body text-primary popup_body">
                <h5 class="card-title">Evolución</h5>
                <p class="card-text">{{substr($evolutivo->descripcion,0, 13)}}
                    <a href="" class="verEvol" style="color:blue !important" data-toggle="modal"
                        data-target="#verEvolutiva" data-idevol="{{$evolutivo->id}}">...ver</a>
                </p>
            </div>
        </div>
        @endforeach
        @endif
    </div>
    @endif
</div>
