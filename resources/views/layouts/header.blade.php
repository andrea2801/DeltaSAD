<div class="container-fluid header p-3">
    <div class="row justify-content-center aligin-items-center">
        <div class="col-6 col-md-2 d-flex align-items-center justify-content-center justify-content-md-start mr-0 mr-md-5">
            <a href=""> <img class="logo" src="{{asset('img/Logo2.png')}}"></a>
        </div>
        <div class="col-2 d-none d-md-flex align-items-center">
            <p>Bienvenido/a <span class="usuario"> "Usuario"</span></p>
        </div>
        <div class="col-2 d-none d-md-flex align-items-center justify-content-center offset-3">
            <p class="date">
                <script type="text/JavaScript">
                    var f = new Date(); document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear() + " - " + f.getHours() + ":" + f.getMinutes() + "H");
                </script>
            </p>
        </div>
        <div class="col-6 col-md-1 text-center d-flex align-items-center justify-content-center justify-content-md-end offset-0 offset-md-1">
            <p class="d-none d-md-flex">Salir&nbsp;
                <a href="">
                    <img class="logout" src="{{asset('img/icons/logout.png')}}">
                </a>
            </p>
            <a class="d-flex d-md-none" href="">
                <img class="logout" src="{{asset('img/icons/logout.png')}}">
            </a>
        </div>
    </div>
</div>
