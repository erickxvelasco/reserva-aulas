@extends('layouts.app', ['activePage' => 'gestion.historico', 'titlePage' => __(' Historial')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="card-header card-header-default bg-dark">
                            <h4 class="card-title mt-0"> Historial de la Gestión</h4>
                            <p class="card-category">
                                @php
                                    $inicio = date("d/m/Y", strtotime($gestion->inicio));
                                    /* //$inicio = $inicio->addDay(1);
                                    $inicio = $inicio->format('Y-m-d'); */
                                    $fin = date("d/m/Y", strtotime($gestion->final));
                                @endphp
                                {{ $gestion->detalle . '(' . $inicio . ' - ' . $fin . ')' }}
                            </p>

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
                                <table class="table table-hover">
                                    <thead class="table-secondary">
                                        <tr>
                                            <th colspan="5"></th>
                                            <th class="bg-secondary text-center text-white" colspan="2">Usuario</th>
                                            <th class="bg-dark text-center text-white" colspan="2">Administrador</th>
                                            <th class="text-center" colspan="2"></th>
                                        </tr>
                                        <tr>
                                            <th>Estado</th>
                                            <th>Motivo</th>
                                            <th>Fecha</th>
                                            <th>Horario</th>
                                            <th>Total</th>
                                            <th>Creado</th>
                                            <th>Realizado por</th>
                                            <th>Revisado</th>
                                            <th>Revisado por</th>

                                            <th>Aulas</th>
                                            <th>Materias y Grupo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($solicitudes as $dato)
                                            <tr>
                                                {{-- 0=en proceso 1=rechazado 2=aceptado --}}
                                                @if ($dato->estado == 0)
                                                    <td width="8%" style="background-color: rgb(235, 228, 228);"><b>En
                                                            Proceso</b></td>
                                                @else
                                                    @if ($dato->estado == 1)
                                                        <td class="text-danger"><b>Rechazado</b></td>
                                                    @else
                                                        @if ($dato->estado == 2)
                                                            <td class="text-success"><b>Aceptado</b></td>
                                                        @endif
                                                    @endif
                                                @endif


                                                <td>{{ $dato['motivo'] }}</td>
                                                <td class="text-primary"><b>{{ $dato['fecha'] }}</b></td>
                                                <td>{{ devolver_hora($dato['inicio']) . ' - ' . devolver_hora($dato['final']) }}
                                                </td>
                                                <td>{{ $dato['total'] }}</td>
                                                <td>{{ $dato['created_at']->diffForHumans() }}</td>

                                                <td>{{ $dato->user->apellidos . ' ' . $dato->user->nombres }}</td>

                                                @if ($dato['created_at'] != $dato['updated_at'])
                                                    <td class="text-primary">
                                                        <b>{{ $dato['updated_at']->diffForHumans() }}</b></td>
                                                @else
                                                    <td class="text-center">-</td>
                                                @endif
                                                @if ($dato['admin'] > 0)
                                               {{--  <td class="text-center">{{$dato->administrador}}</td> --}}
                                                <td>{{ $dato->administrador->apellidos . ' ' . $dato->administrador->nombres }}</td>

                                                @else
                                                <td class="text-center">-</td>
                                                @endif

                                                @php
                                                    $concat = '';
                                                @endphp
                                                @foreach ($dato->relacion_aulas as $aula)
                                                    @php
                                                        if (strlen($concat) > 0) {
                                                            $concat = $concat . '-' . $aula->relacion_aula->nombre;
                                                        } else {
                                                            $concat = $aula->relacion_aula->nombre;
                                                        }
                                                    @endphp
                                                @endforeach

                                                <td>{{ $concat }}</td>


                                                @php
                                                    $union = '';
                                                @endphp
                                                @foreach ($dato->relacion_grupo as $grupo)
                                                    @php
                                                        $_mate = $grupo->relacion_grupo->relacion_materia->descripcion;
                                                        $_grup = $grupo->relacion_grupo->grupo;
                                                        if (strlen($union) > 0) {
                                                            $union = $union . '-' . $_mate . ' : ' . '[' . $_grup . ']';
                                                        } else {
                                                            $union = $_mate . ' : ' . '[' . $_grup . ']';
                                                        }

                                                    @endphp
                                                @endforeach
                                                <td>{{ $union }}</td>



                                            </tr>
                                        @empty
                                            no hay datos registrados
                                        @endforelse

                                    </tbody>
                                </table>

                                {{ $solicitudes->links('paginacion') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
