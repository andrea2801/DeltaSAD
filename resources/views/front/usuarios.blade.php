@extends('layouts.master')

@section('content')
<section class="usuarios">
    <div class="row container-principal">
        <div class="col-12">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-10">
                    <p class="title-user">Usuarios</p>
                </div>
                <div class="col-12 col-md-10">
                    <p class="subtitle-user">Tus usuarios:</p>
                    <hr>
                </div>
                <div class="col-12 col-md-10 mt-3 ml-5">
                    @foreach ($usuarios as $usuario)
                      <ul class="col-12 col-md-3 mt-2 ml-5">
                        <li class="user-list">
                          <a href="/usuario/{{$usuario->id}}">{{$usuario->apellidos}}, {{$usuario->nombre}}</a>
                        </li>
                    </ul>
                    @endforeach
                </div>
                <div class="col-12 col-md-10 d-flex justify-content-end">
                    {!!$usuarios->links()!!}
                </div>
            </div>
        </div>
        @if(Session::has('eliminado'))
            <script type="text/javascript">
                Swal.fire({
                     icon: 'success',
                     title: 'Done',
                     text: 'Usuario eliminado'
                 })
             </script>
        @elseif(Session::has('error'))
        <script type="text/javascript">
            Swal.fire({
                 icon: 'error',
                 title: 'Ups!',
                 text: 'Error al dar de baja'
             })
         </script>
         @endif
    </div>
    @include('layouts.footer')
</section>
@endsection
