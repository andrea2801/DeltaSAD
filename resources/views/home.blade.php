@extends('layouts.master')

@section('content')
<div class="home">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-5">
                        <p>NOTIFICACIONES RECIBIDAS</p>
                    </div>
                    <div class="col-3">
                        <a href="">
                            <button class="btn btn-primary">Ver enviadas</button>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="">
                            <button class="btn btn-primary">Crear nueva</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
