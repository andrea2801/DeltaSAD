@extends('layouts.master')

@section('content')



<div class="container-fluid p-0 m-0 d-flex usuarios">


  <div class="row container-fluid justify-content-center aligin-items-center">

          <div class="col-12 mt-5 ml-5">
            <h1 class="title-user">Trabajadora</h1>
          </div>

          <div class="col ml-5">

            <h2 class="subtitle-user">Tu equipo</h2>
            </div>
            <div class="col">
            <ul class="nav justify-content-end">
                  <li class="nav-items">

                    <a href="#" class="nav-link active" data-toggle="modal" data-target="#nueva" ><h2>Nueva</h2></a>
                  </li>
                  <li class="nav-items border-left">
                    <a class="nav-link active" href="{{route('todas_trabajadoras')}}"><h2>Mostras todas</h2></a>
                  </li>

             </ul>


           </div>

<div class="col-12 mt-3 ml-5">
  <hr class="user-underline">
  <div class="container justify-content-center align-items-center vh-100">
      <!--grupo1-->
      <div class="card-deck">
        @if(isset($tfs))
        @foreach ($tfs as $tf )
        <div class="card text-center" style="width: 18rem;">
                <img src="/img/icons/trabajadora.png" class="card-img-top" alt="...">
                <div class="card-body bg-primary">
                  <h5 class="card-title">{{$tf->nombre}}</h5>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">{{$tf->telefono}}</li>
                  <li class="list-group-item">{{$tf->email}}</li>
                  <li class="list-group-item">{{$tf->zona}}</li>
                </ul>
                <div>
                    <a href="" class="card-link" data-toggle="modal" data-target="#horarios">Horarios</a>
                    <a href="/trabajadoras/users/{{$tf->id}}"  class="card-link" data-toggle="modal" data-target="#usuario" >Usuarios</a>
                </div>
        </div>
        @endforeach
        @endif
      </div>



</div>

</div>
</div>
</div>







@endsection

