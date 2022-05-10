@extends('layouts.app', ['activePage' => 'recibido.index', 'titlePage' => __(' Historial')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-default bg-dark">
                            <h4 class="card-title mt-0"> Historial de Solicitudes</h4>
                            <p class="card-category">
                                {{ auth()->user()->relacion_cargo['descripcion'] .' : ' .auth()->user()->nombres .' ' .auth()->user()->apellidos }}
                            </p>
                            <button class="btn btn-success btn-sm"id="btn-1"> llegada </button>
                            <button class="btn btn-success btn-sm" id="btn-2"> Prioridad </button>
                        </div>
                        @if (session('status'))
                            <div class="alert alert-default alert-with-icon bg-success" data-notify="container">
                                <i class="material-icons" data-notify="icon">send</i>

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="material-icons">close</i>
                                </button>
                                <span class="text-white" data-notify="message">{{ session('status') }}</span>
                            </div>
                        @endif
                        <div class="card-body">
                            <div class="table-responsive table-bordered">
                                <table class="table table-hover" id="recibir">
                                    <thead class="table-secondary">

                                        <tr>
                                            <th>Estado</th>
                                            <th>Usuario</th>
                                            <th>Motivo</th>
                                            <th>Fecha </th>
                                            <th>Horario</th>
                                            <th>Total</th>
                                            <th>Creado</th>
                                            <th>Aulas</th>
                                            <th>Materia y Grupo</th>
                                            <th colspan="2" class="text-center bg-sucess">Acciones</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($recibidos as $dato )

                                            <tr>
                                                {{-- 0=en proceso 1=rechazado 2=aceptado --}}
                                                @if ($dato->estado == 0)
                                                    <td width="8%" style="background-color: rgb(235, 228, 228);"><b>En
                                                            Proceso</b></td>
                                                @else
                                                    @if ($dato->estado == 1)
                                                        <td class="bg-danger"><b><a href="">Rechazado</a></b></td>
                                                    @else
                                                        @if ($dato->estado == 2)
                                                            <td class="bg-success"><b><a href="">Aceptado</a></b></td>
                                                        @endif
                                                    @endif
                                                @endif

                                                <td>{{ $dato->user->nombres." ".$dato->user->apellidos}}</td>
                                                <td>{{ $dato['motivo'] }}</td>
                                                <td>{{ $dato['fecha'] }}</td>
                                                <td>{{ devolver_hora($dato['inicio']) . ' - ' . devolver_hora($dato['final']) }}
                                                </td>
                                                <td>{{ $dato['total'] }}</td>

                                                <td>{{ $dato['created_at']->diffForHumans() }}</td>
                                                @php
                                                    $concat= "";
                                                @endphp
                                                @foreach ($dato->relacion_aulas as $aula )
                                                @php
                                                    if(strlen($concat)>0){
                                                        $concat= $concat."-".$aula->relacion_aula->nombre;
                                                    }else{
                                                        $concat=$aula->relacion_aula->nombre;
                                                    }
                                                @endphp

                                                @endforeach

                                                <td>{{$concat}}</td>






                                                @php
                                                    $union= "";
                                                @endphp
                                                @foreach ($dato->relacion_grupo as $grupo )
                                                @php
                                                $_mate=$grupo->relacion_grupo->relacion_materia->descripcion;
                                                $_grup=$grupo->relacion_grupo->grupo;
                                                if(strlen($union)>0){
                                                    $union= $union."-".$_mate." : "."[".$_grup."]";
                                                    }else{
                                                        $union=$_mate." : "."[".$_grup."]";
                                                    }

                                                @endphp
                                                @endforeach
                                                <td>{{$union}}</td>


                                                <td width=5>
                                                    <a type="button"rel="tooltip" title="Aceptar" value="Enviar mensaje" class="btn btn-info btn-sm" >
                                                    <span class="material-icons">
                                                        done
                                                        </span></a>
                                                    </td>
                                                    @if($dato['tipo']==2 && $dato['id']==auth()->user()->id)
                                                        <td width=5>
                                                        </td>
                                                    @else
                                                        <td width=5>

                                                                @csrf
                                                                {{ method_field('DELETE') }}

                                                                <a type="button"  rel="tooltip" title="rechazar" class="btn btn-danger btn-sm" >
                                                                <i class="material-icons">highlight_off</i></a>

                                                        </td>
                                                    @endif


                                            </tr>
                                        @empty

                                        no hay datos registrados

                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
