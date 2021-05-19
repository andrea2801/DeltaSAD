<div class="container usuarios">
    <div class="row">
        <div class="col-12 mt-5 ml-5">
            <h1 class="title-user">Usuarios</h1>
        </div>
        <div class="col-12 ml-5">
            <h2 class="subtitle-user">Tus usuarios:</h2>
            <hr class="user-underline">
        </div>

        <div class="col-12 mt-3 ml-5">
            @foreach ($usuarios as $usuario )
              <ul>
              <li class="user-list">{{$usuario->apellidos}},{{$usuario->nombre}}</li>
            </ul>
            @endforeach

        </div>
    </div>
    <div class="row">
        <div class="col-6 ml-5">
            <p>Esto será la paginacion</p>
        </div>
    </div>
</div>
