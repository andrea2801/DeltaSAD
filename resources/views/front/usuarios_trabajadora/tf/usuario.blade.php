

@include('front.usuarios_trabajadora.tf.popUpNotas', ['usuario' => $usuario])

<div class="d-flex justify-content-md-around">
    @if(isset($usuario))
        <div class=" bg-light card bloque_general col-md-6">
            @foreach ($usuario as $u )
                <div class="modal-header ">
                    <h3>{{$u->nombre}} {{$u->apellidos}}</h3>
                </div>
                <div class="card-body">
                    <h3 class="card-title">Dirección:</h3>
                    <p class="bg-white">{{$u->direccion}}</p>
                </div>
                <div class="card-body">
                    <h3 class="card-title">Detalle:</h3>
                    <p class="bg-white">{{$u->detalle}}</p>
                </div>
                <div class="card-body">
                    <h3 class="card-title">Tarea:</h3>
                    <ul class="bg-white">
                        <li><p class="text-dark">{{$u->tareas}}</p></li>
                    </ul>

                </div>
            @endforeach
        </div>
    @endif

</div>
<div class="nota col-md-12 ml-5">
    <div class="d-flex justify-content-between">
        <h2 class="subtitle-user">Notas:</h2>
        <a href="#" class="card-link" data-toggle="modal" data-target="#notas">
            <img class="mas" src="{{asset('img/icons/mas.png')}}" alt="mas">
        </a>
    </div>
    <hr class="user-underline" >
    @if(isset($notas))
        @if(count($notas) == 0)
            <h3>No hay notas creadas</h3>
        @else
            @foreach ($notas as $nota )
                <div class="col-md-12 card border-primary mb-3 p-0" style="max-width: 18rem;">
                    <div class="nombre card-header header_popup">
                        <p>{{$nota->nombre}} {{$nota->apellidos}}:</p>
                    </div>
                    <div class="card-body text-primary popup_body">
                        <p class="text-dark"> {{$nota->nota}}...</p>
                        <p class="text-dark">El: {{$nota->fecha}}</p>
                    </div>
                    <div class="card-body">
                        <a href="/notas/eliminar/{{$nota->id}}">Eliminar</a>
                    </div>
                </div>
            @endforeach
        @endif
    @endif
</div>


