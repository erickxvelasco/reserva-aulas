@extends('layouts.app', ['activePage' => 'grupo.index', 'titlePage' => __(' Grupos')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-plain animate__animated animate__backInDown">
                        <div class="row card-header card-header-default bg-dark">
                            <div class="col">
                                <h4 class="card-title mt-0"> Grupos</h4>
                                <p class="card-category"> Listado de Grupos</p>
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
                                        <th>Materia</th>
                                        <th>Grupo</th>
                                        <th>Incritos</th>
                                        <th>Titular</th>
                                        <th colspan="2" class="text-center bg-sucess">Acciones</th>
                                    </thead>
                                    <tbody>
                                        @forelse ($grupos as $dato)
                                            <tr>
                                                <td>{{ $dato->relacion_materia->descripcion }}</td>
                                                <td class="text-primary"><b>{{ $dato->grupo }}</b></td>
                                                <td>{{ $dato->inscritos }}</td>
                                                @php
                                                    $usuarios = '';
                                                @endphp
                                                @foreach ($dato->relacion_usuario as $uu)
                                                    @php
                                                        $usuarios = $uu->nombres . ' ' . $uu->apellidos;
                                                    @endphp
                                                @endforeach
                                                <td>{{ $usuarios }}</td>

                                                <td width=5>
                                                    <a type="button" rel="tooltip" title="Editar Informacion"
                                                        class="btn btn-primary btn-sm"
                                                        href="{{ route('grupo.edit', $dato->id) }}">
                                                        <i class="material-icons">edit</i></a>
                                                </td>

                                                <td width=5>
                                                    <form action="{{ route('materia.destroy', $dato->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        {{ method_field('DELETE') }}

                                                        <button type="submit" rel="tooltip" title="Eliminar"
                                                            class="btn btn-danger btn-sm">
                                                            <i class="material-icons">delete</i></button>
                                                    </form>
                                                </td>



                                            </tr>
                                        @empty
                                            no hay datos registrados
                                        @endforelse

                                    </tbody>
                                </table>
                                {{ $grupos->links('paginacion') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
