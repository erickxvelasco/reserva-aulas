@extends('layouts.app', ['activePage' => 'solicitud.create', 'titlePage' => __(' Nueva Solicitud')])
{{--@include('modal.add_materia') --}}

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="" autocomplete="off" class="form-horizontal" name="form">
            @csrf
            @method('post')
            {{--  <h1>{{$errors}}}</h1> --}}

            <div class="card ">
              <div class="card-header card-header-default bg-dark ">
                <h4 class="card-title">{{ __('Solicitud de Reserva') }}</h4>
                <p class="card-category">{{ auth()->user()->relacion_cargo['descripcion'] . ' : ' . auth()->user()->nombres . ' ' . auth()->user()->apellidos }}</p>
              </div>
              <div class="card-body " >
                <div class="row d-block">

                            <div class="px-3 col-xl-4 float-right bg-default text-dark" style="background-color: rgb(245, 245, 245)">


                              <table class="table " style="">
                                <thead>
                                    <tr><th colspan="4" class="text-center text-dark table-active"><b>Mis Grupos - Materias</b></th></tr>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th>Materia</th>
                                        <th class="text-success">Grupo</th>
                                        <th>Inscritos</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $total=0;
                                    @endphp
                                    @foreach ( auth()->user()->relacion_grupos as $grupos)
                                    @php
                                        $total=$total + $grupos->inscritos ;
                                    @endphp
                                    <tr>
                                    <td width=30>
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="form-check-input " type="checkbox" value="{{$grupos->inscritos}}" onclick="calcular()" checked>
                                          <span class="form-check-sign ">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                      </div>
                                    </td>
                                    <td>{{ $grupos->relacion_materia['descripcion'] }}</td>
                                    <td class="text-success"><b>{{ $grupos->grupo }}</b></td>
                                    <td>{{ $grupos->inscritos }}</td>
                                    </tr>

                                    @endforeach


                                </tbody>

                              </table>
                              <div class="text-center border border-dark bg-default" style="background-color: rgb(254, 255, 239);">
                                <label class="text-right display-4">Total :</label>

                                <label id="total_td" class="text-primary display-4">{{ $total }}</label>
                            </div>
                            <br>
                            </div>



                    <div class="col-md-12 col-xl-8 float-left">


                        <div class="row">
                            <label class="col-sm-2 pt-3 col-form-label text-secondary">{{ __('Total alumnos ') }}</label>
                            <div class="col-sm-6">
                              <div class="form-group{{ $errors->has('input_total') ? ' has-danger' : '' }}">
                                <input autocomplete="off" class="form-control{{ $errors->has('motivo') ? ' is-invalid' : '' }}" name="input_total" id="input_total" type="text" placeholder="{{ __('Total alumnos') }}" value="{{ old('input_total',$total) }}" required="true" />
                                @if ($errors->has('input_total'))
                                  <span id="name-error" class="error text-danger" for="input_total">{{ $errors->first('input_total') }}</span>
                                @endif
                              </div>
                            </div>
                            <label class="col-sm-4 pt-3 col-form-label text-success">{{ __('la reserva se solicitara para esta cantidad de alumnos ') }}</label>
                          </div>

                        <div class="row">
                            <label class="col-sm-2 pt-3 col-form-label text-secondary">{{ __('Motivo ') }}</label>
                            <div class="col-sm-9">
                              <div class="form-group{{ $errors->has('motivo') ? ' has-danger' : '' }}">
                                <input autocomplete="off" class="form-control{{ $errors->has('motivo') ? ' is-invalid' : '' }}" name="motivo" id="id_motivo" type="text" placeholder="{{ __('Motivo') }}" value="{{ old('motivo') }}" required="true" />
                                @if ($errors->has('motivo'))
                                  <span id="name-error" class="error text-danger" for="id_motivo">{{ $errors->first('motivo') }}</span>
                                @endif
                              </div>
                            </div>
                          </div>

                          <div class="row">
                              <label class="col-sm-2 pt-3 col-form-label text-secondary">{{ __(' Fecha ') }}</label>
                              <div class="col-sm-6">
                                <div class="form-group{{ $errors->has('nombres') ? ' has-danger' : '' }}">
                                  <input class="form-control{{ $errors->has('nombres') ? ' is-invalid' : '' }}" name="nombres" id="id_nombre" type="date" placeholder="sss" value="{{ old('nombres', Carbon\Carbon::now()->format('d-m-Y')) }}" required="true" />
                                  @if ($errors->has('nombres'))
                                    <span id="name-error" class="error text-danger" for="id_nombre">{{ $errors->first('nombres') }}</span>
                                  @endif
                                </div>
                              </div>
                              <label class="col-sm-4 pt-3 col-form-label text-primary"><b> Semestre(15/02/2022 - 19/08/2022) </b></label>
                            </div>

                            <div class="row">
                              <label class="col-sm-2 pt-3 col-form-label text-secondary">{{ __(' Rango de Horas ') }}</label>
                              <div class="col-sm-4">
                                  <div class="form-group{{ $errors->has('expedido') ? ' has-danger' : '' }}">
                                      <select id="hora_inicio" name="hora_inicio" class="form-control " style="position: relative;top: -5px;">

                                      </select>
                                     @if ($errors->has('expedido'))
                                      <span id="name-error" class="error text-danger" for="id_nombre">{{ $errors->first('expedido') }}</span>
                                    @endif
                                  </div>
                                </div>

                              <div class="col-sm-4">
                                  <div class="form-group{{ $errors->has('expedido') ? ' has-danger' : '' }}">
                                      <select id="hora_final" name="hora_final" class="form-control " style="position: relative;top: -5px;">

                                      </select>
                                     @if ($errors->has('expedido'))
                                      <span id="name-error" class="error text-danger" for="id_nombre">{{ $errors->first('expedido') }}</span>
                                    @endif
                                  </div>
                                </div>

                            </div>

                            <div class="col-12 cleafix">
                                <div class="card cleafix">
                                  <div class="card-header card-header-tabs card-header-success">
                                    <div class="nav-tabs-navigation">
                                      <div class="nav-tabs-wrapper">
                                        <span class="nav-tabs-title">Aulas Disponibles:</span>
                                        <ul class="nav nav-tabs" data-tabs="tabs">
                                          <li class="nav-item">
                                            <a class="nav-link active" href="" data-toggle="tab">
                                              <i class="material-icons">view_in_ar</i> Generar Permutaciones
                                              <div class="ripple-container"></div>
                                            </a>
                                          </li>

                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-body">
                                    <div class="tab-content">
                                      <div class="tab-pane active" id="profile">
                                        <table class="table">
                                            <thead>
                                                <th>#</th>
                                                <th>Aulas Sugeridas</th>
                                                <th class="text-center">Seleccionar</th>
                                            </thead>
                                          <tbody>
                                            <tr>
                                              <td>1</td>
                                              <td>622-623-624</td>
                                              <td width=30><button class="btn btn-outline-success">Seleccionar</button></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>691a-691b-691g</td>
                                                <td width=30><button class="btn btn-outline-success">Seleccionar</button></td>
                                            </tr>


                                          </tbody>
                                        </table>
                                      </div>


                                    </div>
                                  </div>
                                </div>
                              </div>




                    </div>
                  </div>







                  <br>
                </div>{{--end cardbody--}}


                <div class="text-center" style="background-color:rgb(242, 239, 239);">
                    <br><input type="submit" class="btn btn-dark active btn-lg" value='Enviar Solicitud' /><br><br>
                  </div>
            </div>

          </form>


        </div>
      </div>





    </div>
  </div>


  <script type="text/javascript">
        let horas = ['06:45','07:30','08:15','09:00','09:45','10:30','11:15','12:00','12:45','13:30','14:15','15:00','15:45','16:30','17:15','18:00','18:45','19:30','20:15','21:00','21:45']

        let inicio =  document.getElementById("hora_inicio");
        let fin =  document.getElementById("hora_final");

        cargar_select(inicio,0,true,0);

        removeOptions(fin);
        cargar_select(fin,1,false,5);

            inicio.addEventListener('change', updateValue);
            function updateValue(e) {
                removeOptions(fin);
                indice_select_inicio = parseInt(e.target.value) + 1;
                cargar_select(fin,indice_select_inicio,false,5);
                //alert(indice_select_inicio);
            }

        function cargar_select(select,indice_inicio,es_inicio,contador){
            //es_inicio>0->entonce no llega hasta las 09:45
            final=es_inicio?horas.length - 1:horas.length;
            conta=1;
            for (var i=indice_inicio;i<final ;i++){
                if (contador==0){
                    option = document.createElement("option");
                    option.value = i;
                    option.text = horas[i];
                    select.appendChild(option);
                }else{
                    if (conta<=contador){
                        option = document.createElement("option");
                        option.value = i;
                        option.text = horas[i];
                        select.appendChild(option);
                        conta++;
                    }
                }
            }
        }

        //buscamos el indice al que pertenece
        function devolver_posicion(valor){
            var rpta=0;
            for (var i=0;i<horas.length -1 ;i++){
                if (valor==horas[i]){
                    rpta=i;
                }
            }
            return rpta;
        }

        function removeOptions(selectbox) { var i; for(i=selectbox.options.length-1;i>=0;i--) { selectbox.remove(i); } }



        function calcular(){
            var total=0;
            $(document).ready(function(){
                $("input[type=checkbox]:checked").each(function(){
                    //cada elemento seleccionado
                   total = total +  parseInt($(this).val());
                });
               let input_total =  document.getElementById('input_total');
               let auxi =  document.getElementById('total_td');

               input_total.value=total;
               auxi.innerHTML="<b>" + total + "</b>";
            });
        }



</script>
@endsection
