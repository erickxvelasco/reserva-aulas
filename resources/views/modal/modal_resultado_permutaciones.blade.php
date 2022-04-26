<div class="modal fade" id="ModalPermutacion" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog bd-example-modal-lg" >
     <div class="modal-content">
       <div class="modal-header bg-success">
         <h4 class="modal-title text-white" id="exampleModalLongTitle">Aulas Disponibles : </h4>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <form action="" method="post">
           @csrf
           @method('post')
       <div class="modal-body">



<div class="col-12 ">
    @if (session('aulas'))
            <table class="table">
                <thead>
                    <th>Aulas Sugeridas</th>
                    <th>Total</th>
                    <th>Seleccionar</th>
                </thead>
              <tbody>



                    @forelse ( session('aulas') as $aulas)
                    <tr>
                        <td>{{$aulas['aulas']}}</td>
                        <td>{{$aulas['total']}}</td>
                        <td class="text-center" width=15>
                            <button class="btn btn-success btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">check</i>
                              </button>
                        </td>
                    </tr>
                    @empty
            <h1 class="text-danger display-3">No se encontraron Aulas disponibles para la capacidad solicitada</h1>
                    @endforelse

              </tbody>
            </table>

            @endif
</div>

</div>
<div class="modal-footer text-center">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
</div>
</form>
</div>
</div>
</div>

