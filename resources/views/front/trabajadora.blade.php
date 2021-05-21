@extends('layouts.master')

@section('content')
<!--<style>.container{ width:70%;}-->

</style>
<div class="container-fluid p-0 m-0 d-flex usuarios">
   
        @include('front.nav')       
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
                    <a class="nav-link active" href="#"><h2>Crear</h2></a>
                  </li>
                  <li class="nav-items border-left">
                    <a class="nav-link active" href="#"><h2>Mostrar</h2></a>
                  </li>
                  
             </ul>             
      
   
           </div>           

<div class="col-12 mt-3 ml-5">
  <hr class="user-underline">
  <div class="container justify-content-center align-items-center vh-100">
      <!--grupo1-->
      <div class="card-deck">

      <div class="card text-center" style="width: 18rem;">
                <img src="/img/icons/trabajadora.png" class="card-img-top" alt="...">
                <div class="card-body bg-primary">
                  <h5 class="card-title">Maria Dolors</h5>   
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">933 444 222</li>
                  <li class="list-group-item">maria@gmail.com</li>
                  <li class="list-group-item">Zona I</li>
                </ul>
                <div>
                  <a href="#" class="card-link">Horarios</a>
                  <a href="#" class="card-link">Usuarios</a>
                </div>
        </div>
        


       <div class="card text-center" style="width: 18rem;">
                <img src="/img/icons/trabajadora.png" class="card-img-top" alt="...">
                <div class="card-body bg-primary">
                  <h5 class="card-title">Maria Dolors</h5>   
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">933 444 222</li>
                  <li class="list-group-item">maria@gmail.com</li>
                  <li class="list-group-item">Zona I</li>
                </ul>
                <div>
                  <a href="#" class="card-link">Horarios</a>
                  <a href="#" class="card-link">Usuarios</a>
                </div>
        </div>

        <div class="card text-center"style="width: 18rem;">
                  <img src="/img/icons/trabajadora.png" class="card-img-top" alt="...">
                  <div class="card-body bg-primary">
                    <h5 class="card-title">Maria Dolors</h5>   
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">933 444 222</li>
                    <li class="list-group-item">maria@gmail.com</li>
                    <li class="list-group-item">Zona I</li>
                  </ul>
                  <div>
                    <a href="#" class="card-link">Horarios</a>
                    <a href="#" class="card-link">Usuarios</a>
                  </div>
        </div>

        <div class="card text-center"style="width: 18rem;">
                  <img src="/img/icons/trabajadora.png" class="card-img-top" alt="...">
                  <div class="card-body bg-primary">
                    <h5 class="card-title">Maria Dolors</h5>   
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">933 444 222</li>
                    <li class="list-group-item">maria@gmail.com</li>
                    <li class="list-group-item">Zona I</li>
                  </ul>
                  <div>
                    <a href="#" class="card-link">Horarios</a>
                    <a href="#" class="card-link">Usuarios</a>
                  </div>
        </div>
      </div> 
<!--grupo2-->



    </div>


</div>
</div>    
</div>
@endsection
