<div class="modal fade" id="nueva">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 >Nueva Alta</h4>
            </div>

            <form action="{{route('trabajadoras.store')}}" enctype="multipart/form-data" method="POST" class=" form needs-validation" novalidate>
            @csrf
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="inputNombre" class="col-sm-2 col-form-label">Nombre:</label>
                        <div class="col-sm-4">
                        <input name="nombre" type="text" class="form-control" id="inputNombre" placeholder="" required>
                            <div class="invalid-feedback">
                            Ingrese Nombre.
                            </div>
                        </div>
                        <label for="inputApellido" class="col-sm-2 col-form-label">Apellidos:</label>
                        <div class="col-sm-4">
                        <input name="apellidos" type="text" class="form-control" id="inputApellido" placeholder="" required>
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
                        <input name="password" type="password" class="form-control" id="inputPassword" placeholder="" required>
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
                            <input class="form-check-input" type="radio" name="rol_id" id="inlineRadio2" value="2" required>
                            <label class="form-check-label" for="inlineRadio2">T. Familiar</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="rol_id" id="inlineRadio3" value="3" required>
                            <label class="form-check-label" for="inlineRadio3">T. Social</label>
                        </div>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="img" accept="image/*" class="custom-file-input" id="" lang="es">
                        <label class="custom-file-label" for="img">Seleccionar Archivo </label>
                        {!! $errors->first('img','<span class=error>:message</span>') !!}

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Añadir</button>
                </div>
            </form>
        </div>
    </div>
</div>


