@extends('layouts.master')

@section('content')
<section>
    <div class="row container-principal usuarios">
        <div class="col-12 ml-5">
            <h1 class="title-user">Usuarios</h1>
        </div>
        <div class="col-12 ml-5">
            <h2 class="subtitle-user">Tus usuarios:</h2>
            <hr>
        </div>

        <div class="col-12 mt-3 ml-5">
            @foreach ($usuarios as $usuario)
              <ul class="col-md-2 mt-2 ml-5">
              <li class="user-list "><a href="/usuario/{{$usuario->id}}">{{$usuario->apellidos}}, {{$usuario->nombre}}</a></li>
            </ul>
            @endforeach
        </div>
        <div class="col-12 ml-5 d-flex justify-content-center">
            {!!$usuarios->links()!!}
        </div>
        @if(Session::has('eliminado'))
            <script type="text/javascript">
                Swal.fire({
                     icon: 'success',
                     title: 'done',
                     text: {!!Session::get('eliminado')!!}
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
