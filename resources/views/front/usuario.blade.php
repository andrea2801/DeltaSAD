@extends('layouts.master')

@section('content')
<section class="usuarios">
    <div class="container-fluid p-0 m-0 d-flex">
        <div class="row">
            @if (Auth::user()->rol_id == 1)
            <div class="col-12 mt-5 ml-5 justify-content-between">
                <h1 class="title-user col-md-11">Usuarios</h1>
            </div>
            @foreach ($usuario as $u )
            <div class="modal fade" id="confirmacion">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h4>¿Confirmas que quieres eliminar este usuario?</h4>
                            <button type="button" id="baja" value="{{$u->id}}"><a
                                    href="/usuario/eliminar/{{$u->id}}">Si</a></button>
                            <button type="button" data-dismiss="modal">No</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 ml-5">
                <h2 class="subtitle-user col-md-9">Usuario: {{$u->apellidos}}, {{$u->nombre}}</h2>
                <button type="button" class="btn btn-link col-md-1 mt-4 pt-4" id="update">Modificar
                    usuario
                </button>

                <a href="" id="baja" class=" col-md-1 mt-5 pt-1" data-toggle="modal" data-target="#confirmacion">Dar de
                    baja</a>
                <hr class="user-underline col-md-12">
            </div>
            @endforeach
            @endif
            <div class="d-flex col-md-12">
                <div class="col-12 mt-3 ml-5">
                    @if (Auth::user()->rol_id == 1)
                    @include('front.usuarios_trabajadora.coordinadora.usuario', ['usuario' => $usuario, 'incidencias' =>
                    $incidencias, 'evolutivos' => $evolutivos,'tfs' => $tfs])
                    @elseif (Auth::user()->rol_id == 2)
                    @include('front.usuarios_trabajadora.tf.usuario', ['usuario' => $usuario, 'notas' => $notas])
                    @endif
                </div>
            </div>

            @if(Session::has('errorCarga'))
                <script type="text/javascript">
                    Swal.fire({
                        icon: 'error',
                        title: 'Ups!',
                        text: {!!Session::get('errorCarga')!!}
                    })
                </script>
            @endif
        </div>
    </div>
    @include('layouts.footer')
</section>
@endsection
