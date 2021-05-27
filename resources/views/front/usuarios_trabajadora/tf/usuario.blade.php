
<style>
    .card{

padding: 24px;
border: 1px solid #2679B9;
box-shadow: 0px -2px 8px 2px rgb(27 131 183 / 83%);
font-size: 12px;
font-weight: normal;
}
</style>
@if(isset($usuario))
    @foreach ($usuario as $u )
        <div class="card" style="width: 30rem;">
            <div class="modal-header ">
                <h4>{{$u->nombre}}</h4>
            </div>
            <div class="card-body">
                <h5 class="card-title">Dirección:</h5>
                <p>{{$u->direccion}}</p>
            </div>
            <div class="card-body">
                <h5 class="card-title">Detalle:</h5>
                <p>{{$u->detalle}}</p>
            </div>
            <div class="card-body">
                <h5 class="card-title">Tareas:</h5>
                <p>{{$u->tareas}}</p>
            </div>
            @if(isset($notas))
                @if(count($notas) == 0)
                    <h3>No hay notas creadas</h3>
                @else
                    @foreach ($notas as $nota )
                        <div class="card border-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Nota</div>
                            <div class="card-body text-primary">
                            <p class="card-text">{{$nota->tf}}: {{$nota->nota}}...</p>
                            <p class="card-text">El: {{$nota->created_at}}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            @endif
        </div>
    @endforeach
@endif

