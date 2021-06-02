<div class="modal-header">
    <h4>Usuarios Asignados</h4>
</div>
<div class="modal-body">
    @if (isset($users))
        @if(count($users) !=0 )
        @foreach ($users as $value)
            <a href="/usuario/{{$value->id}}">{{$value->nombre}} {{$value->apellidos}}</a>
        @endforeach
        @else
            <p>Aún no tiene usuarios asignados</p>
        @endif
    @endif
    @if(Session::has('error'))
        <p>Ups..! Ha habido un error al obtener los datos</p>
    @endif
</div>
<div class="modal-footer">
    <button type="button" class="close" data-dismiss="modal">
        <span class="span">×</span>
    </button>
</div>
