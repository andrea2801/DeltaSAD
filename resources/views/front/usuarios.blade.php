@extends('layouts.master')

@section('content')
<div class="usuarios p-0 m-0 d-flex">
    @include('front.nav')
    <div class="row container-fluid">
        <div class="col-12 ml-5">
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
        <div class="col-12 ml-5">
            <p>Esto será la paginacion</p>
        </div>
    </div>
</div>
@endsection
