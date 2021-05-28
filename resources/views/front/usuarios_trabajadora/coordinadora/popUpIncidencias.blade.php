<div class="modal fade" id="incidencias">
    <div class="modal-dialog">
        <div class="modal-content">
            @foreach ($usuario as $u )
            <div class="modal-header">
                <h4 >Nueva incidencia</h4>
            </div>
            <div class="modal-body">
                 <p>Usuario: {{$u->nombre}} {{$u->apellidos}}</p>
            </div>

            <div class="modal-body">
                <form action="{{route('crear.incidencia')}}" method="GET" class="form needs-validation" novalidate>
                    <div class="form-group row">
                        <label for="descripcion" class="col-sm-2 col-form-label">Descripción:</label>
                        <div class="col-sm-12">
                            <textarea name="descripcion" type="textarea" class="form-control" required rows="4"></textarea>
                            <div class="invalid-feedback">
                                Añadir descripción.
                            </div>
                        </div>

                        <input type="hidden" name="usuario" value="{{$u->id}}">
                        @endforeach
                        @foreach ($tfs as $tf )
                            <input type="hidden" name="tf" value={{$tf->id}}>
                        @endforeach
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
