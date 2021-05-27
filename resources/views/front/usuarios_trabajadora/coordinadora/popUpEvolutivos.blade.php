<div class="modal fade" id="evolutivos">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 >Nuevo evolutivo</h4>
            </div>
            <div class="modal-body">
                <form action="{{route('crear.evolutivo')}}" method="GET" class="form needs-validation" novalidate>
                    @foreach ($usuario as $u )
                    <div class="form-group row">
                        <label for="evolucion" class="col-sm-12 col-form-label">Evolución de {{$u->nombre}} {{$u->apellidos}}:</label>
                        <div class="col-sm-12">
                            <textarea name="evolucion" type="textarea" class="form-control" required rows="4"></textarea>
                            <div class="invalid-feedback">
                                Añadir evolutivo.
                            </div>
                        </div>
                        <input type="hidden" name="usuario" value="{{$u->id}}">
                        @foreach ($tfs as $tf )
                            <input type="hidden" name="tf" value={{$tf->id}}>
                        @endforeach
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </div>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
</div>
