<div class="modal fade" id="trabajadora">
    <div class="modal-dialog">
        <div id="trabajadoracontent" class="modal-content">
            <div class="modal-header">
                <h4 >Modificar Trabajadora</h4>
            </div>

            <form id="update_employee" action="{{route('trabajadoras.update')}}" method="POST" >
                @csrf
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="inputNombre" class="col-sm-2 col-form-label">Nombre:</label>
                        <div class="col-sm-4">
                        <input name="nombre" type="text" class="form-control"  value="" placeholder="">

                        </div>
                        <label for="inputApellido" class="col-sm-2 col-form-label">Apellidos:</label>
                        <div class="col-sm-4">
                        <input name="apellidos" type="text" class="form-control"  placeholder="" >

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputTelf" class="col-sm-2 col-form-label">Teléfono:</label>
                        <div class="col-sm-4">
                        <input name="telefono" type="text" class="form-control"  placeholder="" >

                        </div>


                        <label for="inputEmail4" class="col-sm-2 col-form-label">Correo:</label>
                        <div class="col-sm-4">
                        <input name="email" type="email" class="form-control"  placeholder="" >

                        </div>

                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Zona:</label>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="zona"  value="1" required>
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

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>

        </div>
    </div>
</div>


