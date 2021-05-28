<div class="modal fade" id="nueva">
    <div class="modal-dialog">
        <div class="modal-content">


            <form action="{{route('trabajadoras.store')}}" method="POST" class=" form needs-validation" novalidate>
            @csrf
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="inputde" class="col-sm-2 col-form-label">De:</label>
                        <div class="col-sm-4">
                        <input name="de" type="text" class="form-control" id="inputde" placeholder="" required>
                        </div>
                        <label for="inputpara" class="col-sm-2 col-form-label">Para:</label>
                        <div class="col-sm-4">
                        <input name="para" type="text" class="form-control" id="inputpara" placeholder="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEstado" class="col-sm-2 col-form-label">Estado:</label>
                        <div class="col-sm-2">
                        <input name="estado" type="text" class="form-control" id="inputEstado" placeholder="" required>
                        </div>
                        <label for="inputPrioridad" class="col-sm-2 col-form-label">Prioridad:</label>
                        <div class="col-sm-1 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>


                        <div class="col-sm-5">
                            <input type="date" class="form-control" id="start">
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-sm">
                            <label for="exampleFormControlInput1" class="form-label">Asunto</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                          </div>


                    </div>
                    <div class="form-group row">
                        <div class="col-sm ">
                            <label for="exampleFormControlTextarea1" class="form-label">Mensaje:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                    </div>

                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm">
                            <label for="exampleFormControlTextarea1" class="form-label">Respuesta:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Añadir</button>
                </div>
            </form>
        </div>
    </div>
</div>


