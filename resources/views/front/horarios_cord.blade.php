@extends('layouts.master')

@section('content')
    <div class="container-fluid p-0 m-0 d-flex usuarios">
        @include('front.nav')
        <div class="row">
            <div class="col-12 mt-5 ml-5">
                <h1 class="title-user">HORARIOS</h1>
            </div>
            <div class="col-12 ml-5">
                <h2 class="subtitle-user">Tu horario</h2>
                <hr class="user-underline">
            </div>
            <div class="row ml-5">
                <div class="col-12 ml-5">
                    <div class="col-md-12 ml-5">
                        <!--Prueba, no se aun como hacerlo, es solo vista-->
                        <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=2&amp;bgcolor=%23ffffff&amp;ctz=Europe%2FMadrid&amp;src=NGZia3BmbzNqYjUzZHZ2M2dmOTg5ZjRnczhAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%237CB342&amp;showTitle=0&amp;showCalendars=0&amp;showDate=1&amp;showNav=1&amp;showTz=1" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>

                    </div>
                </div>
            </div>



        </div>

    </div>
@endsection
