@extends('layouts.app', ['activePage' => 'user.index', 'titlePage' => __(' Usuarios')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-default bg-dark">
            <h4 class="card-title mt-0"> Usuarios</h4>
            <p class="card-category"> Listado de usuarios del sistema</p>
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
                  <th>Estado</th>
                  <th>Apellidos y nombres</th>
                  <th>Cuenta</th>
                  <th>Correo electronico</th>
                  <th>Cargo</th>
                  <th colspan="3" class="text-center bg-sucess">Acciones</th>
                </thead>
                <tbody>
                   @forelse ($users as $dato )
                  <tr>
                    <td><b class="text-{{$dato['estado']==1 ? 'success':'danger'}}">{{$dato['estado']==1 ? 'Activo':'Inactivo'}}</b></td>
                    <td>{{$dato['apellidos']}} {{ $dato['nombres']}}</td>
                    <td><b class="text-primary">{{$dato['tipo']==1 ? 'Estandar':'Administrador'}}</b></td>
                    <td>{{$dato['email']}}</td>
                    <td><b >{{$dato->relacion_cargo['descripcion']}}</b></td>

                        @if($dato['tipo']==1)
                        <td width=5>
                            <form action="{{ route('user.asignature', $dato->id) }}" method ="POST" >
                                @csrf
                                {{ method_field('post') }}

                                <button type="submit" rel="tooltip" title="Materias y Grupos" class="btn btn-info btn-sm" >
                                <i class="material-icons">science</i></button>
                            </form>
                        </td>
                        @else
                        <td width=5></td>
                        @endif
                        <td width=5>
                        <a type="button"rel="tooltip" title="Editar Informacion" class="btn btn-primary btn-sm" href="{{ route('user.edit', $dato->id) }}">
                        <i class="material-icons">edit</i></a>
                        </td>
                        @if($dato['tipo']==2 && $dato['id']==auth()->user()->id)
                            <td width=5>
                            </td>
                        @else
                            <td width=5>
                                <form action="{{ route('user.destroy', $dato->id) }}" method ="POST" >
                                    @csrf
                                    {{ method_field('DELETE') }}

                                    <button type="submit" rel="tooltip" title="{{$dato['estado']==1 ? 'Desactivar':'Activar'}} cuenta" class="btn btn-{{$dato['estado']==1 ? 'danger':'success'}} btn-sm" >
                                    <i class="material-icons">{{$dato['estado']==1 ? 'delete':'sync'}}</i></button>
                                </form>
                            </td>
                        @endif


                  </tr>
                  @empty
                  no hay datos registrados

                @endforelse

                </tbody>
              </table>
              <nav aria-label="Page navigation text-dark">
                <ul class="pagination justify-content-end text-danger">
                    {{ $users->links() }}
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
