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
                    <a href="#" class="nav-link active" data-toggle="modal" data-target="#nueva">
                        <h2>Nueva</h2>
                    </a>
                </li>
                <li class="nav-items border-left">
                    <a class="nav-link active" href="{{route('trabajadoras.todas')}}">
                        <h2>Buscar</h2>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-12 mt-3 ml-5">
            <hr class="user-underline">
            <div class="container justify-content-center align-items-center vh-100">

                @if(isset($tfs))
                @foreach ($tfs as $tf )
                <div class="card mb-3 p-0 col-md-5 mr-4 ml-5" style="width: 18rem;">

                    @if(isset($tf->img))
                    <img src="imagenUser/{{$tf->img}}" class="card-img-top" alt="...">
                    @else
                    <img src="/img/icons/trabajadora.png" class="card-img-top" alt="...">
                    @endif
                    <div class="card-body bg-primary text-center">
                        <h5 class="card-title">{{$tf->nombre}}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><span>Dni: </span>{{$tf->dni}}</li>
                        <li class="list-group-item"><span>Teléfono: </span>{{$tf->telefono}}</li>
                        <li class="list-group-item"><span>Email: </span>{{$tf->email}}</span></li>
                        <li class="list-group-item"><span>Zona: </span>{{$tf->zona}}</li>
                    </ul>
                    <div class="text-center">

                        <a href="#" onclick="usuarios({{$tf->id}})" class="card-link" data-toggle="modal"
                            data-target="#usuario">Usuarios</a>
                    </div>
                </div>
                @endforeach
                @endif


                <div class="modal fade" id="usuario">
                    <div class="modal-dialog">
                        <div id="usuariocontent" class="modal-content">
                        </div>
                    </div>
                </div>
                @include('front.trabajadoras.store')
            </div>
        </div>
    </div>
</div>
<!-- Pendiente que funcione desde app.js-->
<script>
function usuarios(id) {
    $.ajax({
        url: "{{Route('trabajadoras.showTFusers')}}",
        data: `id=${id}`,
        type: "GET",
        success: function (data) {
            $("#usuariocontent").html(data);
        }
    });
}

</script>
@include('layouts.footer')
@endsection
