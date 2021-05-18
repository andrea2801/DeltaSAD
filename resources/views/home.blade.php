@extends('layouts.app')

@section('content')
<div class="container usuarios">
        <div class="row">
            <div class="col-12 mt-5 ml-5">
                <h1 class="title-user">Usuarios</h1>
            </div>
            <div class="col-12 ml-5">
                <h2 class="subtitle-user">Usuarios zona $x</h2>
                <hr class="user-underline">
            </div>

            <div class="col-12 mt-3 ml-5">
                <ul>
                    <li class="user-list">$nombreabuelete</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-6 ml-5">
                <p>Esto será la paginacion</p>
            </div>
        </div>
    </div>

@endsection
