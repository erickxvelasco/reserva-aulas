<div class="modal fade" id="ModalPermutacion" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog bd-example-modal-lg" >
     <div class="modal-content">
       <div class="modal-header bg-success">
         <h4 class="modal-title text-white" id="exampleModalLongTitle">Aulas Disponibles : </h4>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>

       <div class="modal-body">



<div class="col-12 divtablita">
    @if (session('aulas'))
            <table class="table table-striped">
                <thead class="text-dark active" style="background-color: #ececec ;">
                    <th>Aulas Sugeridas</th>
                    <th class="text-center">Capacidad</th>
                    <th class="text-center">Seleccionar</th>
                </thead>
              <tbody>
                    @forelse ( session('aulas') as $aulas)
                    <tr>
                        <td width="70%">{{$aulas['aulas']}}</td>
                        <td class="text-center" width="20%">{{$aulas['total']}}</td>
                        <td class="text-center" width="10%">
                            <form action="{{ route('solicitud.store') }}" method ="POST" >
                                @csrf
                                {{ method_field('post') }}

                                @foreach ($aulas['id'] as $aula)
                                    <input type="hidden" name="aula[]" value="{{ $aula }}">
                                @endforeach
                                @if (session('grupos'))
                                    @foreach (session('grupos') as $grupo)
                                        <input type="hidden" name="grupo[]" value="{{ $grupo }}">
                                    @endforeach
                                @endif
                                    <input type="hidden" name="total" value="{{session('total')}}">
                                    <input type="hidden" name="motivo" value="{{session('motivo')}}">
                                    <input type="hidden" name="fecha" value="{{session('fecha')}}">
                                    <input type="hidden" name="hora_inicio" value="{{session('hora_inicio')}}">
                                    <input type="hidden" name="hora_final" value="{{session('hora_final')}}">
                                    <input type="hidden" name="capacidad" value="{{session('capacidad')}}">

                            <button type="submit" class="btn btn-success btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">check</i>
                              </button>
                            </form>
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
  <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
</div>
</div>
</div>
</div>

