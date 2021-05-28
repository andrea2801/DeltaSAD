
<style>
    .card{
        padding: 24px;
        border: 1px solid #2679B9;
        box-shadow: 0px -2px 8px 2px rgb(27 131 183 / 83%);
        font-weight: normal;
    }
</style>
@include('front.usuarios_trabajadora.tf.popUpNotas', ['usuario' => $usuario])

<div class="d-flex justify-content-md-around">
    @if(isset($usuario))
        <div class="card col-md-6" style="width: 30rem;">
            @foreach ($usuario as $u )
                <div class="modal-header ">
                    <h3>{{$u->nombre}} {{$u->apellidos}}</h3>
                </div>
                <div class="card-body">
                    <h3 class="card-title">Dirección:</h3>
                    <p>{{$u->direccion}}</p>
                </div>
                <div class="card-body">
                    <h3 class="card-title">Detalle:</h3>
                    <p>{{$u->detalle}}</p>
                </div>
                <div class="card-body">
                    <h3 class="card-title">Tareas:</h3>
                    <p>{{$u->tareas}}</p>
                </div>
            @endforeach
        </div>
    @endif

</div>
<div class="col-md-6 ml-5">
    <div class="d-flex justify-content-between">
        <h2 class="subtitle-user">Notas:</h2>
        <a href="#" class="card-link" data-toggle="modal" data-target="#notas">
            <img class="mas" src="{{asset('img/icons/mas.png')}}" alt="mas">
        </a>
    </div>
    <hr>
    @if(isset($notas))
        @if(count($notas) == 0)
            <h3>No hay notas creadas</h3>
        @else
            @foreach ($notas as $nota )
                <div class="col-md-12 card border-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header">
                        <p class="text-primary">{{$nota->nombre}} {{$nota->apellidos}}:</p>
                    </div>
                    <div class="card-body text-primary">
                        <p class="text-dark"> {{$nota->nota}}...</p>
                        <p class="text-dark"">El: {{$nota->fecha}}</p>
                    </div>
                    <div class="card-body">
                        <a href="/notas/eliminar/{{$nota->id}}">Eliminar</a>
                    </div>
                </div>
            @endforeach
        @endif
    @endif
</div>


