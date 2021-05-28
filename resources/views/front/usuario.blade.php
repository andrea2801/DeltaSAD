@extends('layouts.master')

@section('content')
<section>
    <div class="container-fluid p-0 m-0 d-flex usuarios">
        <div class="row">
            @if (Auth::user()->rol_id == 1)
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
                    <hr class="user-underline">
                </div>
            @endforeach
            @endif
            <div class="d-flex col-md-12">
                <div class="col-12 mt-3 ml-5">
                    @if (Auth::user()->rol_id == 1)
                        @include('front.usuarios_trabajadora.coordinadora.usuario', ['usuario' => $usuario, 'incidencias' => $incidencias, 'evolutivos' => $evolutivos,'tfs' => $tfs])
                    @elseif (Auth::user()->rol_id == 2)
                        @include('front.usuarios_trabajadora.tf.usuario', ['usuario' => $usuario, 'notas' => $notas])
                    @endif
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</section>
@endsection
