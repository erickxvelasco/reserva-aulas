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
              <div class="card-header card-header-default bg-dark">
                <h4 class="card-title">{{ __('Solicitud de Reserva') }}</h4>
                <p class="card-category">{{ auth()->user()->relacion_cargo['descripcion'] . ' : ' . auth()->user()->nombres . ' ' . auth()->user()->apellidos }}</p>
              </div>
              <div class="card-body ">
                <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-header card-header-tabs card-header-success" style="height:30px">
                            <span class="nav-tabs-title" style="position: relative; top: -20px;">Grupos - Materias :</span>
                        </div>
                        <div class="card-body">
                          <div class="tab-content">
                            <div class="tab-pane active" id="profile">
                              <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th>Materia</th>
                                        <th class="text-success">Grupo</th>
                                        <th>Inscritos</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td width=30>
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox" value="" checked>
                                          <span class="form-check-sign">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                      </div>
                                    </td>
                                    <td>Ingenieria de Sistemas</td>
                                    <td class="text-success"><b>1</b></td>
                                    <td>55</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">

                        <div class="col-9">
                            <div class="alert alert-default" style="background-color: rgb(241, 241, 241);" >
                                <div class="p-0 form-group label-floating has-success">
                                    <label class="control-label">la Reserva se Solicitara para : </label>
                                          <input type="number" value="80" class="form-control" />
                                    <span class="form-control-feedback">
                                    <i class="material-icons">done</i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                  </div>



                <div class="row">
                  <label class="col-sm-2 pt-3 col-form-label text-secondary">{{ __('Motivo ') }}</label>
                  <div class="col-sm-9">
                    <div class="form-group{{ $errors->has('apellidos') ? ' has-danger' : '' }}">
                      <input autocomplete="off" class="form-control{{ $errors->has('apellidso') ? ' is-invalid' : '' }}" name="apellidos" id="id_apellido" type="text" placeholder="{{ __('Apellidos') }}" value="{{ old('apellidos') }}" required="true" />
                      @if ($errors->has('apellidos'))
                        <span id="name-error" class="error text-danger" for="id_apellido">{{ $errors->first('apellidos') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                {{  Carbon\Carbon::now()->format('d-m-Y') }}
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
                    <label class="col-sm-3 pt-3 col-form-label text-primary"><b> Semestre(15/02/2022 - 19/08/2022) </b></label>
                  </div>

                  <div class="row">
                    <label class="col-sm-2 pt-3 col-form-label text-secondary">{{ __(' Cedula de Identidad ') }}</label>
                    <div class="col-sm-5">
                      <div class="form-group{{ $errors->has('ci') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('ci') ? ' is-invalid' : '' }}" name="ci" id="id_ci" type="number" placeholder="{{ __('Cedula de identidad') }}" value="{{ old('ci') }}" required="true" aria-required="true"/>
                        @if ($errors->has('ci'))
                          <span id="name-error" class="error text-danger" for="id_ci">{{ $errors->first('ci') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('expedido') ? ' has-danger' : '' }}">
                            <select name="expedido" class="form-control " style="position: relative;top: -5px;">

                            </select>
                           @if ($errors->has('expedido'))
                            <span id="name-error" class="error text-danger" for="id_nombre">{{ $errors->first('expedido') }}</span>
                          @endif
                        </div>
                      </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-2 pt-3 col-form-label text-secondary">{{ __('Domicilio ') }}</label>
                    <div class="col-sm-9">
                      <div class="form-group{{ $errors->has('domicilio') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('domicilio') ? ' is-invalid' : '' }}" name="domicilio" id="id_domicilio" type="text" placeholder="{{ __('Direccion Domicilio') }}" value="{{ old('domicilio') }}" />
                        @if ($errors->has('domicilio'))
                          <span id="name-error" class="error text-danger" for="id_domicilio">{{ $errors->first('domicilio') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-2 pt-3 col-form-label text-secondary">{{ __('Numero de Celular ') }}</label>
                    <div class="col-sm-9">
                      <div class="form-group{{ $errors->has('celular') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('celular') ? ' is-invalid' : '' }}" name="celular" id="id_celular" type="number" placeholder="{{ __('Numero de Celular') }}" value="{{ old('celular') }}" />
                        @if ($errors->has('celular'))
                          <span id="name-error" class="error text-danger" for="id_celular">{{ $errors->first('celular') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 pt-3 col-form-label text-secondary"> {{ __('Cargo ') }}</label>
                    <div class="col-sm-9">
                      <div class="form-group{{ $errors->has('apellido') ? ' has-danger' : '' }}">
                        <select name="cargo" class="form-control " >

                        </select>
                        @if ($errors->has('cargo'))
                          <span id="name-error" class="error text-danger" for="id_apellido">{{ $errors->first('cargo') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>








                  <br>
                </div>{{--end cardbody--}}
                <div class="card-header card-header-default" style="background-color:rgb(221, 230, 231); height:50px;">
                    <p class="card-category text-dark">{{ __('Datos cuenta') }}</p>
                  </div>
                  <div class="card-body ">

                      <div class="row">
                        <label class="col-sm-2 pt-3 col-form-label text-secondary"> {{ __('Rol de cuenta ') }}</label>
                        <div class="col-sm-9">
                          <div class="row">
                            <div class="px-3 py-2 form-check form-check-radio form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="tipo" id="inlineRadio1" value="1" {{ old('tipo','1')==1?'checked':''}}> Estandar
                                  <span class="circle">
                                      <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                              <div class="p-2 form-check form-check-radio form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="tipo" id="inlineRadio2" value="2" {{ old('tipo')==2?'checked':''}}> Administrador
                                  <span class="circle">
                                      <span class="check"></span>
                                  </span>
                                </label>
                              </div>

                          </div>
                        </div>
                      </div>

                      <input type="hidden" name="estado" value="1">

                    <div class="row">
                        <label class="col-sm-2 pt-3 col-form-label text-secondary">{{ __(' Correo Electronico ') }}</label>
                        <div class="col-sm-9">
                          <div class="form-group{{ $errors->has('email ') ? ' has-danger' : '' }}">
                            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="id_correo" type="email" placeholder="{{ __('Correo Electronico') }}" value="{{ old('email') }}" required/>
                            @if ($errors->has('email'))
                              <span id="email-error" class="error text-danger" for="id_correo">{{ $errors->first('email') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>

                      <div class="row">
                          <label class="col-sm-2 pt-3 col-form-label text-secondary" for="id_pass">{{ __(' Contraseña ') }}</label>
                          <div class="col-sm-9">
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                              <input class="form-control{{ $errors->has('pass') ? ' is-invalid' : '' }}" name="password" id="id_pass" type="password" placeholder="{{ __('Contraseña') }}" value="{{ old('password') }}" required />
                              @if ($errors->has('password'))
                                <span id="name-error" class="error text-danger" for="id_pass">{{ $errors->first('password') }}</span>
                              @endif
                            </div>
                          </div>
                        </div>
                </div>
                <div class="text-center" style="background-color:rgb(242, 239, 239);">
                    <br><input type="submit" class="btn btn-dark active btn-lg" value={{ __('Registrar') }} /><br><br>
                  </div>
            </div>

          </form>


        </div>
      </div>





    </div>
  </div>



@endsection
