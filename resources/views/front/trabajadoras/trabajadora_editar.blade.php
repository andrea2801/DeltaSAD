<div class="modal fade" id="editar_trabajadora">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4>Modificar trabajadora</h4>
            </div>
            <form action="" method="POST" class=" form " novalidate>
                @csrf
                <div class="modal-body">


                    <div class="form-group row">
                        <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                        <div class="col-sm-4">
                            <input name="nombre" type="text" class="form-control" value="" placeholder="" required>

                        </div>
                        <label for="apellidos" class="col-sm-2 col-form-label">Apellidos:</label>
                        <div class="col-sm-4">
                            <input name="apellidos" type="text" class="form-control" value="" placeholder="" required>

                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="inputTelf" class="col-sm-2 col-form-label">Teléfono:</label>
                        <div class="col-sm-4">
                            <input name="telefono" type="text" class="form-control" value="" placeholder="" required>

                        </div>


                        <label for="email" class="col-sm-2 col-form-label">Correo:</label>
                        <div class="col-sm-4">
                            <input name="email" type="email" class="form-control" value="" placeholder="" required>

                        </div>

                    </div>

                    <div class="form-group  row zona_trabajadoras">
                        <div class="col-12">
                            <div class="col-md-12">
                                <label for="zonas"
                                    class="col-12 col-md-4 col-form-label text-md-right select_view">{{ __('Zonas:') }}</label>

                                <select id="select_zonas_edit" class=" col-md-6 form-select"
                                    aria-label="Default select example" name="select_zonas_edit">
                                    <option selected="" value="default">Selecciona</option>
                                    @foreach ($zonas as $zona)
                                    <option value='{{$zona->id}}'>{{$zona->zonas}}</option>
                                    @endforeach
                                </select>
                            </div>
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
</div>
