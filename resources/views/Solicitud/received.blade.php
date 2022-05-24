@extends('layouts.app', ['activePage' => 'recibido', 'titlePage' => __(' Historial')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="row card-header card-header-default bg-dark">
                            <div class="col-9">
                                <h4 class="card-title mt-0"> Historial de Solicitudes</h4>
                                <p class="card-category">
                                    <select name="ordenar" id="ordenar" class="col-xl-5 col-md-5 col-xs-7"
                                        style="font-size:16px;  ">
                                        <optgroup label="Ordenar por :">
                                            <option value="1" {{$valor===2?'selected':''}}>
                                                fecha de creación
                                            </option>
                                            <option value="2" {{$valor===1?'selected':''}}>
                                                fecha de solicitud
                                            </option>
                                        </optgroup>
                                    </select>
                                </p>
                            </div>
                            <div class="col-3 ">


                                {{-- <a href="{{ route('recibido.llegada') }}" class="float-rigth btn btn-warning btn-sm active"id="btn-1"> llegada </a>
                                <a href="{{ route('recibido.prioridad')  }}" class="float-rigth btn btn-info btn-sm" id="btn-2"> Prioridad </a> --}}
                            </div>


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
                                        @forelse ($recibidos as $dato)
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

                                                <td>{{ $dato->user->nombres . ' ' . $dato->user->apellidos }}</td>
                                                <td>{{ $dato['motivo'] }}</td>
                                                <td>{{ $dato['fecha'] }}</td>
                                                <td>{{ devolver_hora($dato['inicio']) . ' - ' . devolver_hora($dato['final']) }}
                                                </td>
                                                <td>{{ $dato['total'] }}</td>

                                                <td>{{ $dato['created_at']->diffForHumans() }}</td>
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


                                                <td width=5>
                                                    <form method="post"
                                                        action="{{ route('recibido.update', $dato->id) }}">
                                                        @csrf
                                                        @method('patch')
                                                        <input type="hidden" name="estado" value=2>
                                                        <button type="submit" rel="tooltip" title="Aceptar"
                                                            class="btn btn-success btn-sm">
                                                            <span class="text-white material-icons">
                                                                done
                                                            </span>
                                                        </button>
                                                    </form>
                                                </td>

                                                <td width=5>
                                                    <form method="post"
                                                        action="{{ route('recibido.update', $dato->id) }}">
                                                        @csrf
                                                        @method('patch')
                                                        <input type="hidden" name="estado" value=1>

                                                        <button type="submit" rel="tooltip" title="rechazar"
                                                            class="btn btn-danger btn-sm">
                                                            <span class="text-white material-icons">
                                                                block
                                                            </span>
                                                        </button>
                                                    </form>
                                                </td>



                                            </tr>
                                        @empty

                                            no hay datos registrados
                                        @endforelse

                                    </tbody>
                                </table>
                                {{ $recibidos->links('paginacion') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        /* $('#ordenar').select2({
                    theme: "classic"
                }); */

        let combo = document.getElementById('ordenar');
        combo.addEventListener('change', (event) => {
            console.log( event.target.value );
            if (event.target.value==1){
                //
                window.location = "{{route('recibido.prioridad')}}";
            }else{
                window.location = "{{route('recibido.llegada')}}";

            }

        });
    </script>
@endsection
