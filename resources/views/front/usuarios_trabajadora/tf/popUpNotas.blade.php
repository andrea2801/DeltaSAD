<div class="modal fade" id="notas">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Crear nota</h4>
            </div>
            <div class="modal-body">
                <form action="{{route('crear.nota')}}" method="POST" class="form needs-validation" novalidate>
                    @foreach ($usuario as $u )
                    <div class="form-group row">
                        <label for="Nota" class="col-sm-12 col-form-label">Nota:</label>
                        <div class="col-sm-12">
                            <textarea name="nota" type="textarea" class="form-control" required rows="4"></textarea>
                            <div class="invalid-feedback">
                                Añadir contenido.
                            </div>
                        </div>
                        <input type="hidden" name="usuario" value={{$u->id}}>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Añadir nota</button>
                    </div>
                    @endforeach
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            </div>
        </div>
    </div>
</div>
