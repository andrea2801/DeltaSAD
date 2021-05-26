<div class="navigation-wrap bg-light p-3 start-style">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{ route('home') }}" target="_blank">
                        <img src="{{asset('img/Logo2.png')}}" alt="logo">
                    </a>
                    <p class="d-none d-md-block align-items-center ml-5 pt-5">Bienvenido/a <span class="usuario"> {{Auth::user()->nombre}}</span></p>&nbsp;&nbsp;&nbsp;
                    <p class="d-none d-md-block date pt-5"></p>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse pt-5" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto py-4 py-md-0">
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="{{route ('trabajadoras.index')}}"><img class="nav-icon-img" src="{{asset('img/icons/trabajadora.png')}}" alt="trabajadoras">Trabajadoras</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="{{route ('horarios')}}"><img class="nav-icon-img" src="{{asset('img/icons/horario.png')}}" alt="horarios">Horarios</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="{{route ('usuarios')}}"><img class="nav-icon-img" src="{{asset('img/icons/familia.png')}}" alt="usuarios">Usuarios</a>
                            </li>
                        </ul>
                    </div>
                    <p class="d-none d-md-flex pt-5">Salir&nbsp;
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
                </nav>
            </div>
        </div>
    </div>
</div>
