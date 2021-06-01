


        <div class="modal-header">
            <h4 >Usuarios Asignados</h4>
        </div>
        <div class="modal-body">
            @if (isset($users))

            @foreach ($users as $value)

                <p><a href="/usuario/"{{$value->id}}>{{$value->nombre}} {{$value->apellidos}}</a></p>


                @endforeach
            @endif
        </div>
        <div class="modal-footer">
            <button type="button" class="close" data-dismiss="modal">
                <span class="span">×</span>
            </button>

        </div>
