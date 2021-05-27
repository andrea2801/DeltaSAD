<div class="modal fade" id="nueva">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Enviar notificación</h4>
            </div>
            <form action="{{route('trabajadoras.store')}}" method="POST" class=" form needs-validation" novalidate>
            @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="inputNombre" class="col-sm-2 col-form-label">Para:</label>
                        <div class="col-sm-8">
                        <select name="para" type="text" class="custom-select mr-sm-2" id="inputNombre" required>
                            <option value="">Pepa</option>
                        </select>
                            <div class="invalid-feedback">
                                Porfavor, ingresa destinatari@.
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputAsunto" class="col-sm-2 col-form-label">Asunto:</label>
                        <div class="col-sm-4">
                        <input name="asunto" type="text" class="form-control" id="inputAsunto" required>
                            <div class="invalid-feedback">
                                Indicar asunto.
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputMensaje" class="col-sm-2 col-form-label">Mensaje:</label>
                        <div class="col-sm-4">
                            <textarea name="detalle" type="textarea" class="form-control" required rows="4"></textarea>
                            <div class="invalid-feedback">
                                Completar mensaje.
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="zona" id="inlineRadio3" value="1" required>
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
