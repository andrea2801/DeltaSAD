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

                    <a href="#" class="nav-link active" data-toggle="modal" data-target="#nueva" ><h2>Alta</h2></a>
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
                <a href="#" class="card-link" data-toggle="modal" data-target="#horarios">Horarios</a>
                <a href="#" class="card-link" data-toggle="modal" data-target="#usuario">Usuarios</a>
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
                <a href="#" class="card-link" data-toggle="modal" data-target="#horarios">Horarios</a>
                <a href="#" class="card-link" data-toggle="modal" data-target="#usuario">Usuarios</a>
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
                  <a href="#" class="card-link" data-toggle="modal" data-target="#horarios">Horarios</a>
                  <a href="#" class="card-link" data-toggle="modal" data-target="#usuario">Usuarios</a>
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

                    <a href="#" class="card-link" data-toggle="modal" data-target="#horarios">Horarios</a>
                    <a href="#" class="card-link" data-toggle="modal" data-target="#usuario">Usuarios</a>
                  </div>
        </div>
      </div>
<!--grupo2-->




<div class="modal fade" id="horarios">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4>Horarios</h4>

            </div>
            <div class="modal-body">
                <p>Lu - Ma 08:00-14:00 </p>
                <p>Lu - Ma 08:00-14:00 </p>
                <p>Lu - Ma 08:00-14:00 </p>
            </div>
            <div class="modal-footer">
            <button type="button" class="close" data-dismiss="modal">
                    <span>×</span>
                </button>

            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="usuario">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 >Usuarios Asignados</h4>
            </div>
            <div class="modal-body">
              <h2>Usuarios</h2>
               <p> lista </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="close" data-dismiss="modal">
                    <span class="span">×</span>
                </button>

            </div>
        </div>
    </div>
</div>


<!--Form -->

<div class="modal fade" id="nueva">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 >Nueva Alta</h4>
            </div>

            <div class="modal-body">

  <form action="" method="" class=" form needs-validation" novalidate>

        <div class="form-group row">
         <label for="inputNombre" class="col-sm-2 col-form-label">Nombre:</label>
        <div class="col-sm-4">
         <input name="nombre" type="text" class="form-control" id="inputNombre" placeholder="" required>
            <div class="invalid-feedback">
            Ingrese Nombre.
            </div>
        </div>
        <label for="inputApellido" class="col-sm-2 col-form-label">Apellido:</label>
        <div class="col-sm-4">
         <input name="apellido" type="text" class="form-control" id="inputApellido" placeholder="" required>
            <div class="invalid-feedback">
            Ingrese Apellido.
            </div>
        </div>

      </div>
      <div class="form-group row">
         <label for="inputDni" class="col-sm-2 col-form-label">Dni:</label>
        <div class="col-sm-4">
         <input name="dni" type="text" class="form-control" id="inputDni" placeholder="" required>
            <div class="invalid-feedback">
            Ingrese DNI.
            </div>

        </div>
        <label for="inputPassword" class="col-sm-2 col-form-label">Password:</label>
        <div class="col-sm-4">
         <input name="pass" type="password" class="form-control" id="inputPassword" placeholder="" required>
            <div class="invalid-feedback">
            Ingrese Password.
            </div>

        </div>

      </div>
      <div class="form-group row">
         <label for="inputTelf" class="col-sm-2 col-form-label">Teléfono:</label>
        <div class="col-sm-4">
         <input name="telefono" type="text" class="form-control" id="inputDni" placeholder="" required>
            <div class="invalid-feedback">
            Ingrese Teléfono.
            </div>
        </div>


         <label for="inputEmail4" class="col-sm-2 col-form-label">Correo:</label>
        <div class="col-sm-4">
         <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="" required>
            <div class="invalid-feedback">
            Ingrese Email.
            </div>
        </div>

     </div>



     <div class="form-group row">
     <label class="col-sm-2 col-form-label">Zona:</label>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="zona" id="inlineRadio1" value="1" required>
        <label class="form-check-label" for="inlineRadio1">Zona I</label>
      </div>

      <div class="form-check form-check-inline">
         <input class="form-check-input" type="radio" name="zona" id="inlineRadio2" value="2" required>
        <label class="form-check-label" for="inlineRadio2">Zona II</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="zona" id="inlineRadio3" value="3" required>
        <label class="form-check-label" for="inlineRadio3">Zona III</label>
        </div>
      </div>

      <div class="form-group row">
            <label class="col-sm-2 col-form-label">Rol:</label>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="rol" id="inlineCheckbox2" value="1" required>
                <label class="form-check-label" for="inlineCheckbox2">Coordinadora</label>
              </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="rol" id="inlineCheckbox1" value="2" required>
              <label class="form-check-label" for="inlineCheckbox1">T. Familiar</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="rol" id="inlineCheckbox2" value="3" required>
              <label class="form-check-label" for="inlineCheckbox2">T. Social</label>
            </div>

      </div>


        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFileLang" lang="es">
            <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
        </div>



            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Añadir</button>


            </div>
</form>

        </div>
    </div>
</div>



</div>

<!--Fin Form -->


</div>

</div>
</div>
</div>
@endsection
