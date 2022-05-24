@extends('layouts.app', ['activePage' => 'gestion.index', 'titlePage' => __(' Gestion')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain animate__animated animate__backInDown">
                        <div class="row card-header card-header-default bg-dark">
                            <div class="col">
                                <h4 class="card-title mt-0"> Gestiones</h4>
                                <p class="card-category"> Administracion de gestiones</p>
                            </div>
                            <div class=" float-end">
                                <a href="{{ route('grupo.create') }}" class="btn btn-success"> Nuevo </a>
                            </div>

                        </div>
                        @if (session('status'))
                            <div class="alert alert-default alert-with-icon bg-success" data-notify="container">
                                <i class="material-icons" data-notify="icon">notifications</i>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="material-icons">close</i>
                                </button>
                                <span class="text-white" data-notify="message">{{ session('status') }}</span>
                            </div>
                        @endif
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="table-secondary">
                                        <th>Gestion</th>
                                        <th>Fecha Inicio</th>
                                        <th>Fecha Fin</th>
                                        <th colspan="2" class="text-center bg-sucess">Acciones</th>
                                    </thead>
                                    <tbody>
                                        @forelse ($gestiones as $dato)
                                            <tr>

                                                {{-- el estado de gestion
                                                inactivo 0 => muestra historico
                                                activo 1 => "se puede cerrar gestion"
                                                created 2 => "permite apertura de gestion" --}}

                                                <td>{{ $dato->detalle }}</td>
                                                <td class="text-primary"><b>{{ $dato->inicio }}</b></td>
                                                <td class="text-primary"><b>{{ $dato->final }}</b></td>

                                                @if ($dato->estado === 0)
                                                    <td width=5>
                                                        <a type="button" class="btn btn-warning btn-block" href=""><i
                                                                class="material-icons">work_history</i>&nbsp; Ver
                                                            Historico</a>
                                                    </td>
                                                @else
                                                    @if ($dato->estado === 1)
                                                        <td width=5>
                                                            <a type="button" class="btn btn-danger btn-block" href=""><i
                                                                    class="material-icons">event_busy</i>&nbsp; Cerrar
                                                                Gestion</a>
                                                        </td>
                                                    @else
                                                    @endif
                                                @endif
                                            </tr>
                                        @empty
                                            no hay datos registrados
                                        @endforelse

                                    </tbody>
                                </table>
                                {{ $gestiones->links('paginacion') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
