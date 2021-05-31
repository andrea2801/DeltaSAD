@if(isset($usuario))
    @include('front.usuarios_trabajadora.coordinadora.popUpEvolutivos', ['usuario' => $usuario, 'tfs' => $tfs])
    @include('front.usuarios_trabajadora.coordinadora.popUpIncidencias', ['usuario' => $usuario, 'tfs' => $tfs])
    @include('front.usuarios_trabajadora.coordinadora.popUpVerEvolutiva')
    <section class="cord_user">
        <div class="row container-principal">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-6">
                        @foreach ($usuario as $u )
                            <form class="content-box p-5" method="GET" action={{route('usuario.update')}}>
                                <div class="row">
                                    <div class="col-12">
                                        <p class="text-right dni">{{$u->dni}}</p>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <p class="first-text">Dirección:</p>
                                        <p class="content-text p-3">{{$u->direccion}}</p>
                                        <label class="edit-text mr-5">Modificar dirección:</label>
                                        <input class="edit-input" type="text" name="direccion" value={{$u->direccion}}>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <p class="first-text">Teléfono:</p>
                                        <p class="content-text p-3">{{$u->telefono}}</p>
                                        <label class="edit-text mr-5">Modificar teléfono:</label>
                                        <input class="edit-input" type="number" name="direccion" value={{$u->telefono}}>
                                    </div>
                                    <div class="col-12 edit-margin">
                                        <p class="first-text">Persona de contacto:</p>
                                        <p class="content-text p-3">{{$u->persona_contacto}}</p>
                                        <label class="edit-text mr-5">Modificar persona de contacto:</label>
                                        <input class="edit-input" type="text" name="direccion" value={{$u->persona_contacto}}>
                                    </div>
                                    <div class="col-12 edit-margin">
                                        <p class="first-text">Detalle:</p>
                                        <textarea class="content-text p-3" rows="3" readonly>{{$u->detalle}}</textarea>
                                        <label class="edit-text mr-5">Modificar detalle:</label>
                                        <textarea class="edit-input" rows="3">{{$u->detalle}}</textarea>
                                    </div>
                                    <div class="col-12 edit-margin">
                                        <p class="first-text">Tareas:</p>
                                        <textarea class="content-text p-3" rows="3" readonly>{{$u->tareas}}</textarea>
                                        <label class="edit-text mr-5">Modificar tareas:</label>
                                        <textarea class="edit-input" rows="3">{{$u->tareas}}</textarea>
                                    </div>
                                    <div class="col-12 col-md-6 edit-margin">
                                        <p class="first-text">Horas asignadas:</p>
                                        <p class="content-text p-3">{{$u->horas_asignadas}}</p>
                                        <label class="edit-text mr-5">Modificar horas:</label>
                                        <input class="edit-input" type="number" name="direccion" value={{$u->horas_asignadas}}>
                                    </div>
                                    <div class="col-12 col-md-6 edit-margin">
                                        <p class="first-text">TF asignada:</p>
                                        <p class="content-text p-3">{{$u->tfn}} {{$u->tfa}}</p>
                                        <label class="edit-text mr-5">Elegir nueva TF:</label>
                                        <select class="edit-input" name="tf">
                                            <option>Elija un/a trabajador/a</option>
                                            @foreach ($tfs as $tf)
                                                <option value={{$tf->id}}>{{$tf->nombre}} {{$tf->apellidos}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </form>
                        @endforeach
                        <div class="row mt-5 justify-content-end edit-btn">
                            <div class="col-4">
                                <button class="btn btn-general" type="submit">Guardar cambios</button>
                            </div>
                            <div class="col-3">
                                <a href=""><button class="btn btn-general bg-danger">Cancelar</button></a>
                            </div>
                        </div>
                    </div>
@endif
                    <div class="col-12 col-md-6 mt-5 mt-md-0">
                        <div class="row">
                            <div class="col-12 mt-5 mt-md-0">
                                <div class="row justify-content-center">
                                    <div class="col-9">
                                        <p class="first-home-txt">Incidencias</p>
                                    </div>
                                    <div class="col-2 text-right">
                                        <a href="#" class="card-link mt-5" data-toggle="modal" data-target="#incidencias">
                                            <img class="mas" src="{{asset('img/icons/mas.png')}}" alt="mas">
                                        </a>
                                    </div>
                                </div>
                                <hr>
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-10">
                                        @if(isset($incidencias))
                                            @if(count($incidencias) == 0)
                                                <p>Usuari@ sin incidencias</p>
                                            @else
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Fecha</th>
                                                            <th>Estado</th>
                                                            <th>Descipcion</th>
                                                            <th>Opciones</th>
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
                        </div>
                    </div>
                    <div class="col-12 mt-5">
                        @if(isset($evolutivos))
                            <div class="row mt-5">
                                <div class="col-12">
                                    <div class="row justify-content-center">
                                        <div class="col-9">
                                            <p class="first-home-txt">Evolutivos</p>
                                        </div>
                                        <div class="col-2 text-right">
                                            <a href="#" class="card-link mt-5" data-toggle="modal" data-target="#evolutivos">
                                                <img class="mas" src="{{asset('img/icons/mas.png')}}" alt="mas">
                                            </a>
                                        </div>
                                    </div>
                                    <hr>
                                    @if(count($evolutivos) == 0)
                                        <p>No hay evolutivos</p>
                                    @else
                                        <div class="row justify-content-center">
                                            @foreach ($evolutivos as $evolutivo)
                                                    <div class="col-5 card border-primary mb-3 p-0 mr-4 ml-5" style="max-width: 18rem;">
                                                        <div class="card-header header_popup">{{$evolutivo->fecha_creacion}}</div>
                                                        <div class="card-body text-primary popup_body">
                                                            <h5 class="card-title">Evolución</h5>
                                                            <p class="card-text">{{substr($evolutivo->descripcion,0, 13)}}
                                                                <a href="" class="verEvol" style="color:blue !important" data-toggle="modal" data-target="#verEvolutiva" data-idevol="{{$evolutivo->id}}">...ver</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
