{{--modal add materia--}}

<div class="modal fade" id="modal_add_materia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header bg-default">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Materia - Grupo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="col-12">
                <div class="card">
                  <div class="card-header card-header-default border-default " style="background-color: rgb(245, 245, 245);border: rgb(182, 181, 181) 1px solid">
                    <h5 class="card-title text-dark">Listado de Materias</h5>
                    <div class="row card-category">
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                      <i class="material-icons">search</i>
                                  </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Criterio de Busqueda">
                              </div>
                        </div>
                        <div class="col align-left">
                            <button class="btn btn-default active btn-sm btn-round">
                                Buscar
                            </button>
                        </div>
                    </div>

                  </div>
                  <div class="card-body table-responsive">
                    <table class="table table-hover">
                      <thead class="text-warning">
                        <th>ID</th>
                        <th>Materia</th>
                        <th>Departamento</th>
                        <th>Seleccionar</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Inteligencia Artificial</td>
                          <td>Informatica</td>
                          <td><button class="btn btn-outline-warning btn-sm">Seleccionar</button></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Inteligencia Artificial</td>
                            <td>Informatica</td>
                            <td><button class="btn btn-outline-warning btn-sm">Seleccionar</button></td>
                          </tr>
                          <tr>
                            <td>1</td>
                            <td>Inteligencia Artificial</td>
                            <td>Informatica</td>
                            <td><button class="btn btn-outline-warning btn-sm">Seleccionar</button></td>
                          </tr>
                          <tr>
                            <td>1</td>
                            <td>Inteligencia Artificial</td>
                            <td>Informatica</td>
                            <td><button class="btn btn-outline-warning btn-sm">Seleccionar</button></td>
                          </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="p-3 col-12 border-warning" style="background-color: rgb(247, 247, 247);border: rgb(182, 181, 181) 2px solid">
                  <div class="input-group">
                    <div class="col-3 input-group-prepend">
                      <span class="input-group-text">
                        <span class="material-icons">science</span> Materia
                      </span>
                    </div>
                    <input type="text" class="col-7 form-control" placeholder="materia" value="Sistemas de infromacion 1" disabled>
                  </div>
                  <br>
                  <div class="input-group">
                    <div class="col-3 input-group-prepend">
                      <span class="input-group-text">
                        <span class="material-icons">account_tree</span> Grupo
                      </span>
                    </div>
                    <input type="text" class="col-7 form-control" placeholder="grupo">
                  </div>
                  <br>
                  <div class="input-group">
                    <div class="col-3 input-group-prepend">
                      <span class="input-group-text">
                        <span class="material-icons">group</span> # de Inscritos
                      </span>
                    </div>
                    <input type="text" class="col-7 form-control" placeholder="Inscritos">
                  </div>


            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-dark active">Agregar</button>
        </div>
      </div>
    </div>
  </div>
