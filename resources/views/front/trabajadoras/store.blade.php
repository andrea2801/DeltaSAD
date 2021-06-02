<div class="modal fade" id="nueva">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 >Nueva Alta</h4>
            </div>

            <form action="{{route('trabajadoras.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="inputNombre" class="col-sm-2 col-form-label">Nombre:</label>
                        <div class="col-sm-4">
                        <input name="nombre" type="text" value="{{old('nombre')}}" class="form-control" id="inputNombre" placeholder="" pattern="[a-zA-Z]{1,15}" required>
                        </div>
                        <label for="inputApellido" class="col-sm-2 col-form-label">Apellidos:</label>
                        <div class="col-sm-4">
                        <input name="apellidos" type="text" value="{{old('apellidos')}}" class="form-control" id="inputApellido" pattern="[a-zA-Z]{1,15}" placeholder="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDni" class="col-sm-2 col-form-label">Dni:</label>
                        <div class="col-sm-4">
                        <input name="dni" type="text" value="{{old('dni')}}" class="form-control" id="inputDni" required>
                        <span class="text-danger">{{ $errors->first('dni') }}</span>
                        </div>
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password:</label>
                        <div class="col-sm-4">
                        <input name="password" type="password" class="form-control" id="inputPassword" placeholder="" required>
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="inputTelf" class="col-sm-2 col-form-label">Teléfono:</label>
                        <div class="col-sm-4">
                        <input name="telefono" type="text" value="{{old('telefono')}}" class="form-control" id="inputDni" placeholder="" required>

                            <span class="text-danger">{{ $errors->first('telefono') }}</span>
                        </div>


                        <label for="inputEmail4" class="col-sm-2 col-form-label">Correo:</label>
                        <div class="col-sm-4">
                        <input name="email" type="email" value="{{old('email')}}" class="form-control" id="inputEmail4" placeholder="" required>

                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Zona:</label>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"  name="zona" id="inlineRadio1" value="1" required>
                            <label class="form-check-label" for="inlineRadio1">Clot</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="zona" id="inlineRadio2" value="2" required>
                            <label class="form-check-label" for="inlineRadio2">San Marti</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"  name="zona" id="inlineRadio3" value="3" required>
                            <label class="form-check-label" for="inlineRadio3">Sagrada Familia</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Rol:</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"  name="rol_id" id="inlineRadio1" value="1" required>
                            <label class="form-check-label" for="inlineRadio1">Coordinadora</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="rol_id" id="inlineRadio2" value="2" required>
                            <label class="form-check-label" for="inlineRadio2">T. Familiar</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"  name="rol_id" id="inlineRadio3" value="3" required>
                            <label class="form-check-label" for="inlineRadio3">T. Social</label>
                        </div>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="img" accept="image/*" class="custom-file-input" id="" lang="es">
                        <label class="custom-file-label" for="img">Seleccionar Archivo </label>


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Añadir</button>
                </div>
            </form>
        </div>
    </div>
</div>


