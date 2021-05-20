<div class="header p-3">
    <div class="row container-fluid justify-content-center aligin-items-center">
        <div class="col-6 col-md-2 d-flex align-items-center justify-content-center justify-content-md-start mr-0 mr-md-5">
            <a href="{{ route('home') }}"> <img class="logo" src="{{asset('img/Logo2.png')}}"></a>
        </div>
        <div class="col-2 d-none d-md-flex align-items-center">
            <p>Bienvenido/a <span class="usuario"> {{Auth::user()->nombre}}</span></p>
        </div>
        <div class="col-2 d-none d-md-flex align-items-center justify-content-center offset-3">

            <p class="date">

            </p>
        </div>
        <div class="col-6 col-md-1 text-center d-flex align-items-center justify-content-center justify-content-md-end offset-0 offset-md-1">
            <p class="d-none d-md-flex">Salir&nbsp;
                <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    <img class="logout" src="{{asset('img/icons/logout.png')}}">
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </p>
            <a class="d-flex d-md-none" href="">
                <img class="logout" src="{{asset('img/icons/logout.png')}}">
            </a>
        </div>
    </div>
</div>
