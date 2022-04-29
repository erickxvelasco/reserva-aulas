@extends('layouts.app', ['activePage' => 'solicitud.index', 'titlePage' => __(' Historial')])

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
                                            <th colspan="6"></th>
                                            <th class="bg-secondary text-center text-white" colspan="2">Administrador</th>
                                            <th colspan="2" class="text-center"></th>
                                        </tr>
                                        <tr>
                                            <th>Estado</th>
                                            <th>Motivo</th>
                                            <th>Fecha</th>
                                            <th>Horario</th>
                                            <th>Total</th>
                                            <th>Creado</th>
                                            <th>Revisado por</th>
                                            <th>Fecha</th>
                                            <th>Aulas</th>
                                            <th>Materias</th>
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
                                                        <td class="bg-danger"><b><a href="">Rechazado</a></b></td>
                                                    @else
                                                        @if ($dato->estado == 2)
                                                            <td class="bg-success"><b><a href="">Aceptado</a></b></td>
                                                        @endif
                                                    @endif
                                                @endif


                                                <td>{{ $dato['motivo'] }}</td>
                                                <td>{{ $dato['fecha'] }}</td>
                                                <td>{{ devolver_hora($dato['inicio']) . ' - ' . devolver_hora($dato['final']) }}
                                                </td>
                                                <td>{{ $dato['total'] }}</td>
                                                <td>{{ $dato['created_at']->diffForHumans() }}</td>
                                                @if ($dato['admin'] == 0)
                                                    <td class="text-center">-</td>
                                                @else
                                                    <td>{{ $dato->relacion_admin->apellidos }}</td>
                                                @endif

                                                @if ($dato['created_at'] != $dato['updated_at'])
                                                    <td>{{ $dato['updated_at']->diffForHumans() }}</td>
                                                @else
                                                    <td class="text-center">-</td>
                                                @endif
                                                <td width="6%" class="text-center"><b><a href="">Aulas</a></b></td>
                                                <td width="6%" class="text-center"><b><a href="">Materias</a></b></td>



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
