@extends('layouts.app', ['activePage' => 'solicitud.create', 'titlePage' => __(' Nueva Solicitud')])



@section('content')
@include('modal.modal_resultado_permutaciones')


{{-- contenido pagina --}}
{{-- dd($data) --}}

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('aulas.permulaciones') }}" autocomplete="off" class="form-horizontal" name="form" >
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

                            <div class="px-1 col-xl-4 float-right bg-default text-dark" style="background-color: rgb(245, 245, 245)">
                                <div class="p-2 text-center  bg-default" style="background-color: #dcdcdc;">
                                    <label class="text-right text-dark" style="font-size: 130%">Mis Materias - Grupos</label>
                                </div>

                                <div class="px-3 row clearfix divtablita">

                              <table class="table">
                                <thead>
                                   <tr>
                                        <th class="text-center"></th>
                                        <th>Materia</th>
                                        <th class="text-success text-center">Grupo</th>
                                        <th class="text-center">Inscritos</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $total=0;
                                    @endphp

                                    @foreach ( auth()->user()->relacion_grupos as $grupos)

                                    <tr>
                                    <td width=30>
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="form-check-input " type="checkbox" value="{{ $grupos }}" onclick="calcular()" name="grupos[]"   {{ $estado=in_array($grupos, old('grupos', [])) ? 'checked' : '' }}>
                                            @php
                                            if (!empty($estado)){
                                                $total=$total + $grupos->inscritos ;

                                            }

                                            @endphp

                                          <span class="form-check-sign ">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                      </div>
                                    </td>
                                    <td>{{ $grupos->relacion_materia['descripcion'] }}</td>
                                    <td class="text-success text-center"><b>{{ $grupos->grupo }}</b></td>
                                    <td class="text-center">{{ $grupos->inscritos }}</td>
                                    </tr>
                                    @endforeach

                                </tbody>

                              </table>
                            </div>

                              <div class="p-2 text-center  bg-default" style="background-color: #dcdcdc;">
                                <label class="text-right display-4 text-dark">Total :</label>

                                <label id="total_td" class="text-primary display-4">{{ $total }}</label>


                            </div>

                            </div>



                    <div class="col-md-12 col-xl-8 float-left">


                        <div class="row">
                            <label class="col-sm-2 pt-3 col-form-label text-secondary">{{ __('Total alumnos ') }}</label>
                            <div class="col-sm-4">
                              <div class="form-group{{ $errors->has('total') ? ' has-danger' : '' }}">
                                <input autocomplete="off" class="form-control{{ $errors->has('total') ? ' is-invalid' : '' }}" name="total" id="total" type="number" placeholder="{{ __('Total alumnos') }}" value="{{ old('total',$data['total']==0?$total:$data['total']) }}" required="true" />
                                @if ($errors->has('total'))
                                  <span id="name-error" class="error text-danger" for="total">{{ $errors->first('total') }}</span>
                                @endif
                              </div>
                            </div>
                            <label class="col-sm-6 pt-3 col-form-label text-success">{{ __('la solicitud se realizara para esta cantidad') }}</label>
                          </div>

                        <div class="row">
                            <label class="col-sm-2 pt-3 col-form-label text-secondary">{{ __('Motivo ') }}</label>
                            <div class="col-sm-8">
                              <div class="form-group{{ $errors->has('motivo') ? ' has-danger' : '' }}">
                                <input autocomplete="off" class="form-control{{ $errors->has('motivo') ? ' is-invalid' : '' }}" name="motivo" id="id_motivo" type="text" placeholder="{{ __('Motivo') }}" value="{{ old('motivo',$data['motivo']) }}" required="true" />
                                @if ($errors->has('motivo'))
                                  <span id="name-error" class="error text-danger" for="id_motivo">{{ $errors->first('motivo') }}</span>
                                @endif
                              </div>
                            </div>
                          </div>

                          <div class="row">
                              <label class="col-sm-2 pt-3 col-form-label text-secondary">{{ __(' Fecha ') }}</label>
                              <div class="col-sm-4">
                                <div class="form-group{{ $errors->has('fecha') ? ' has-danger' : '' }}">
                                  <input class="form-control{{ $errors->has('fecha') ? ' is-invalid' : '' }}" name="fecha" id="id_fecha" type="date" placeholder="sss" value="{{ old('fecha',$data['fecha']) }}" min="{{ $data['fecha'] }}" max="{{ $gestion['final'] }}" required="true"/>
                                  @if ($errors->has('fecha'))
                                    <span id="name-error" class="error text-danger" for="id_fecha">{{ $errors->first('fecha') }}</span>
                                  @endif
                                </div>
                              </div>
                              @php

                                  $_inicio= Carbon\Carbon::parse($gestion['inicio']);
                                  $_inicio=$_inicio->format('d/m/y');

                                  $_final= Carbon\Carbon::parse($gestion['final']);
                                  $_final=$_final->format('d/m/y');

                              @endphp
                              <label class="col-sm-6 pt-3 col-form-label text-primary"><b> {{$gestion['detalle']." [". $_inicio." - " . $_final."]"}} </b></label>
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
                            <hr class="bg-rose">
                            {{-- Generar permutaciones --}}
                            <div class="row">
                                <label class="col-sm-2 pt-3 col-form-label text-secondary">{{ __(' Buscar Aulas en') }}</label>
                                <div class="col-sm-4">
                                    <div class="form-group{{ $errors->has('expedido') ? ' has-danger' : '' }}">
                                        <select  class="form-control " id="select_ubicacion" name="ubicacion">
                                            <option value="0" >Todos</option>
                                            @foreach ($ubicaciones as $ubicacion)
                                            @if (old('ubicacion')==$ubicacion->id)
                                            <option value="{{ $ubicacion->id }}">{{ $ubicacion->ubicacion}}</option>
                                            @else
                                            <option value="{{ $ubicacion->id }}" >{{ $ubicacion->ubicacion}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                       @if ($errors->has('expedido'))
                                        <span id="name-error" class="error text-danger" for="id_nombre">{{ $errors->first('expedido') }}</span>
                                      @endif
                                    </div>
                                  </div>

                                <div class="col-sm-4">
                                    <div class="form-group{{ $errors->has('expedido') ? ' has-danger' : '' }}">
                                        <select class="form-control" id="select_planta" name="planta">
                                            <option value="0">Todos</option>
                                        </select>
                                       @if ($errors->has('expedido'))
                                        <span id="name-error" class="error text-danger" for="id_nombre">{{ $errors->first('expedido') }}</span>
                                      @endif
                                    </div>
                                  </div>

                              </div>
                              <div class="row">
                                <label class="col-sm-2 pt-3 col-form-label text-secondary">{{ __('Capacidad Aulas ') }}</label>
                                <div class="col-11 col-sm-4 ">
                                  <div class="form-group{{ $errors->has('capacidad') ? ' has-danger' : '' }}">
                                    <input type="number" class="form-control" placeholder="Inscritos" value="{{ old('capacidad',$data['capacidad']) }}" name='capacidad'>

                                    @if ($errors->has('capacidad'))
                                      <span id="name-error" class="error text-danger" for="capacidad">{{ $errors->first('capacidad') }}</span>
                                    @endif
                                  </div>
                                </div>
                                <label for="" class="text-danger" style="position: relative;top:20px;">%</label>
                            </div>

                            {{-- permutaciones --}}
                            <br>
                            <div class="text-center">
                                <input type="submit" class="btn btn-dark active btn-lg" value='Consultar Aulas Disponibles' /><br>
                              </div>

                    </div>
                  </div>

                </div>{{--end cardbody--}}


            </div>


    </form>

    <button id="erick" type="button" data-toggle="modal" data-target="#ModalPermutacion" data-backdrop="static"  hidden>

    </button>


        </div>
      </div>





    </div>
  </div>



  <script type="text/javascript">
   @if (session('aulas'))
        $(document).ready(function(){
        $("#ModalPermutacion").modal();
        });

    let erick = document.getElementById("erick");
                  console.log(erick);
                  erick.click();

  //presionar_click();


    @endif

        let horas = ['06:45','07:30','08:15','09:00','09:45','10:30','11:15','12:00','12:45','13:30','14:15','15:00','15:45','16:30','17:15','18:00','18:45','19:30','20:15','21:00','21:45']

        let inicio =  document.getElementById("hora_inicio");
        let fin =  document.getElementById("hora_final");


        let s_ubicacion=document.getElementById("select_ubicacion");
        let s_planta=document.getElementById("select_planta");

        //var mat = JSON.stringify(@json($plantas));

       /* for (var valor of mat) {
        console.log("Valor: " + valor);
        }
*/



        s_ubicacion.addEventListener('change',
            function() {
                //console.log(s_ubicacion.value);
                removeOptions(s_planta);
                        option = document.createElement("option");
                        option.value = 0;
                        option.text ="Todos";
                        s_planta.appendChild(option);
                @foreach ($plantas as $planta)
                    if ({{ $planta->ubicacion }}==s_ubicacion.value){
                        option = document.createElement("option");
                        option.value = {{$planta->id}};
                        option.text ="{{$planta->planta}}";
                        s_planta.appendChild(option);
                    }

                @endforeach

            });
        @if(old('ubicacion',0)>0)
        s_ubicacion.value={{old('ubicacion',0)}};
        s_ubicacion.dispatchEvent(new Event('change'));
        //console.log(s_ubicacion);
        //console.log(s_ubicacion.value);
        s_planta.value={{old('planta',0)}};
        //console.log(s_planta);
        @endif



        cargar_select(inicio,0,true,0);

        removeOptions(fin);
        cargar_select(fin,1,false,6);

            inicio.addEventListener('change', updateValue);
            function updateValue(e) {
                removeOptions(fin);
                indice_select_inicio = parseInt(e.target.value) + 1;
                cargar_select(fin,indice_select_inicio,false,6);
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
        //cargamos olds
        @if(old('hora_inicio',0)>0)
            inicio.value={{old('hora_inicio',0)}};
            inicio.dispatchEvent(new Event('change'));
            //console.log(inicio);
            //console.log(inicio.value);
            fin.value={{old('hora_final',0)}};
            //console.log(fin);
        @endif


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

        let input_total =  document.getElementById('total');
        let auxi =  document.getElementById('total_td');


        function calcular(){
            var total=0;
            $(document).ready(function(){
                $("input[type=checkbox]:checked").each(function(){
                    //cada elemento seleccionado
                    $aux=$(this).val();
                    console.log($aux);

                    $aux=JSON.parse($aux);


                    console.log($aux['inscritos']);
                    total = total +  parseInt($aux['inscritos']);
                });


               input_total.value=total;
               auxi.innerHTML="<b>" + total + "</b>";
            });
        }


    function presionar_click(){
        let erick = document.getElementById("erick");
                    console.log(erick);
                    erick.click();
    }

</script>
@endsection



