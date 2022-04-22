<div class="modal fade" id="ModalPermutacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-default">
          <h5 class="modal-title" id="exampleModalLabel">Configurar Resultados</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('user.perm') }}" method="post">
            @csrf
            @method('post')
        <div class="modal-body">
              <div class="p-3 col-12 border-delault" style="background-color: rgb(247, 247, 247);border: rgb(182, 181, 181) 2px solid">

                  <div class="input-group">
                    <div class="col-5 input-group-prepend">
                      <span class="input-group-text">
                        <span class="material-icons">fork_right</span> Ubicacion
                      </span>
                    </div>
                    <select class="col-7 form-control" id="select_ubicacion" name="ubicacion">
                        <option value="0" >Todos</option>
                        @foreach ($ubicaciones as $ubicacion)
                        <option value="{{ $ubicacion->id }}">{{ $ubicacion->ubicacion}}</option>
                        @endforeach
                    </select>
                  </div>
                  <br>
                  <div class="input-group">
                    <div class="col-5 input-group-prepend">
                      <span class="input-group-text">
                        <span class="material-icons">business</span> Planta/piso
                      </span>
                    </div>
                    <select class="col-7 form-control" id="select_planta" name="planta">
                        <option value="0">Todos</option>
                    </select>
                  </div>
                  <br>
                  <div class="input-group">
                    <div class="col-5 input-group-prepend">
                      <span class="input-group-text">
                        <span class="material-icons">reduce_capacity</span> capacidad
                      </span>
                    </div>
                    <input type="number" class="col-5 form-control" placeholder="Inscritos" value="50" name='capacidad'>
                    <label for="" class="col-2 form-control">%</label>
                  </div>

                  <input type="hidden" name="alumnos" id="hidden_alumnos" value="0">
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-success active">Generar</button>
        </div>
    </form>
      </div>
    </div>
  </div>
