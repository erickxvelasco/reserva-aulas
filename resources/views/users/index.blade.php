@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __(' Usuarios')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-primary">
            <h4 class="card-title mt-0"> Usuarios</h4>
            <p class="card-category"> Listado de usuarios del sistema</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead class="">
                  <th>#</th>
                  <th>Apellidos y nombre</th>
                  <th>Tipo</th>
                  <th>Correo electronico</th>
                  <th>Cargo</th>
                  <th>Direccion</th>
                  <th>Celular</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Velasco Ustariz Erick Vladimir</td>
                    <td><b class="text-primary">Estandar</b></td>
                    <td>erick@sitic.com</td>
                    <td><b >Auxiliar</b></td>
                    <td>Calle fina sucre s/n</td>
                    <td>7777777</td>
                    <td>
                        <button type="button" rel="tooltip" title="Editar Informacion" class="btn btn-success btn-link btn-sm">
                        <i class="material-icons">edit</i></button>
                    </td>
                    <td>
                        <button type="button" rel="tooltip" title="Eliminar Cuenta" class="btn btn-danger btn-link btn-sm">
                        <i class="material-icons">delete</i></button>
                    </td>

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
@endsection
