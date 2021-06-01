@extends('layouts.master')
@section('content')
<section class="usuarios_ts">
    <div class="row container-principal">
        <div class="col-12">
            <div class="row d-flex align-items-center justify-content-center mb-3">
                <div class="col-12 col-md-10">
                    <p class="title-search">Usuarios</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-10">
                    <p class="subtitle-search">Búsqueda de usuarios</p>
                    <hr>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-12 col-md-3 offset-0 offset-md-1">
                    <p class="dni_search">Buscar por DNI:</p>
                </div>
                <div class="col-12 col-md-5 mb-5">
                    <form action="#" method="GET">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <div class="row">
                            <div class="col-8 col-md-6 pr-0">
                                <input id="dni_search" type="text" class="form-control" name="dni" required autocomplete="dni">
                            </div>
                            <div class="col-4 col-md-6 pl-0">
                                <button class="btn_search" type="submit"><img class="lupa" src="{{asset('img/icons/lupa.png')}}" alt="lupa"></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row d-flex justify-content-center mt-5">
                    <div class="col-10 container-border p-5">
                        <div class="row p-5">
                            <div class="col-12 mb-4">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <p class="name-user">Mua Colmen</p>
                                    </div>
                                    <div class="col-12 col-md-6 text-left text-md-right">
                                        <p class="text-general p-2">45126056X</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-md-7">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-12 col-md-4">
                                                <p class="content-text">Dirección:</p>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <p class="info-content text-general p-2">C/Iglesia 46, 2º2ª</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-5">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-12 col-md-4">
                                                <p class="content-text">Telefóno:</p>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <p class="info-content text-general p-2">666555444</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <p class="content-text">Persona de contacto:</p>
                            </div>
                            <div class="col-12">
                                <p class="info-content text-general p-2">María la maja: 687954123 sólo llamar por las mañanas</p>
                            </div>
                            <div class="col-12">
                                <p class="content-text">Horas asignadas:</p>
                            </div>
                            <div class="col-12">
                                <p class="info-content text-general p-2">9.00, 12.00</p>
                            </div>
                            <div class="col-12">
                                <p class="content-text">Fecha de alta:</p>
                            </div>
                            <div class="col-12">
                                <p class="info-content text-general p-2">2022/11/11</p>
                            </div>
                            <div class="col-12">
                                <p class="content-text">Detalle:</p>
                            </div>
                            <div class="col-12">
                                <textarea class="info-content-txtarea info-content text-general p-2" rows="3" readonly>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim optio quos odit sint perferendis commodi repellat, nostrum consectetur perspiciatis! Maiores iure fuga expedita impedit nostrum consequuntur deleniti autem pariatur nihil.</textarea>
                            </div>
                            <div class="col-12">
                                <p class="content-text">Tareas:</p>
                            </div>
                            <div class="col-12">
                                <textarea class="info-content-txtarea info-content text-general p-2" rows="3" readonly>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus quis culpa eius quasi veniam velit, laborum soluta necessitatibus minus atque voluptate maiores odio minima voluptatibus reiciendis inventore voluptates. Sint, doloribus.</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</section>
@endsection
