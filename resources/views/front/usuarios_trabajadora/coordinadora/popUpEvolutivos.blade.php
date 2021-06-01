<div class="modal fade" id="evolutivos">
    <div class="modal-dialog">
        <div class="modal-content content-box">
            <div class="modal-header">
                <h4>Nuevo evolutivo</h4>
            </div>
            <div class="modal-body">
                <form action="{{route('crear.evolutivo')}}" method="POST" class="form needs-validation" novalidate>
                    @foreach ($usuario as $u )
                    <div class="form-group row">
                        <label for="evolucion" class="col-12 col-form-label">Evolución de {{$u->nombre}} {{$u->apellidos}}:</label>
                        <div class="col-12">
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
                        <button type="submit" class="btn btn-general">Crear</button>
                    </div>
                    @endforeach
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            </div>
        </div>
    </div>
</div>
