<div class="modal fade" id="ModalPermutacion" data-backdrop="static" data-keyboard="false" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-white" id="exampleModalLongTitle">Aulas Disponibles : </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="col-12 divtablita">
                       <table class="table table-striped table-bordered">
                            <thead class="text-dark active" style="background-color: #ececec ;">
                                <th>Aulas Sugeridas</th>
                            </thead>
                            <tbody>
                                @forelse (session('aulas') as $aulas)
                                    <tr>
                                        <td>{{ $aulas['aulas'] }}</td>
                                    </tr>
                                @empty
                                    <h1 class="text-danger display-3">No se encontraron Aulas disponibles para la
                                        capacidad solicitada</h1>
                                @endforelse

                            </tbody>
                        </table>

                </div>

            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
