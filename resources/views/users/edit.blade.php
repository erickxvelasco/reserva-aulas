@extends('layouts.app', ['activePage' => 'user.edit', 'titlePage' => __(' Registrar Usuario')])
{{--@include('modal.add_materia') --}}

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('user.update',$registro) }}" autocomplete="off" class="form-horizontal" name="form">
            @csrf
            @method('patch')
            {{--  <h1>{{$errors}}}</h1> --}}

            <div class="card ">
              <div class="card-header card-header-default bg-secondary active">
                <h4 class="card-title">{{ __('Modificar Usuario') }}</h4>
                <p class="card-category">{{ __('Datos Personales') }}</p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <label class="col-sm-2 pt-3 col-form-label text-secondary">{{ __('Apellidos ') }}</label>
                  <div class="col-sm-9">
                    <div class="form-group{{ $errors->has('apellidos') ? ' has-danger' : '' }}">
                      <input autocomplete="off" class="form-control{{ $errors->has('apellidos') ? ' is-invalid' : '' }}" name="apellidos" id="id_apellido" type="text" placeholder="{{ __('Apellidos') }}" value="{{ old('apellidos',$registro->apellidos) }}" required="true" />
                      @if ($errors->has('apellidos'))
                        <span id="name-error" class="error text-danger" for="id_apellido">{{ $errors->first('apellidos') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 pt-3 col-form-label text-secondary">{{ __(' Nombres ') }}</label>
                    <div class="col-sm-9">
                      <div class="form-group{{ $errors->has('nombres') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('nombres') ? ' is-invalid' : '' }}" name="nombres" id="id_nombre" type="text" placeholder="{{ __('Nombres') }}" value="{{ old('nombres',$registro->nombres) }}" required="true" aria-required="true"/>
                        @if ($errors->has('nombres'))
                          <span id="name-error" class="error text-danger" for="id_nombre">{{ $errors->first('nombres') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-2 pt-3 col-form-label text-secondary">{{ __(' Cedula de Identidad ') }}</label>
                    <div class="col-sm-5">
                      <div class="form-group{{ $errors->has('ci') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('ci') ? ' is-invalid' : '' }}" name="ci" id="id_ci" type="number" placeholder="{{ __('Cedula de identidad') }}" value="{{ old('ci',$registro->ci) }}" required="true" aria-required="true"/>
                        @if ($errors->has('ci'))
                          <span id="name-error" class="error text-danger" for="id_ci">{{ $errors->first('ci') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('expedido') ? ' has-danger' : '' }}">
                            <select name="expedido" class="form-control " style="position: relative;top: -5px;">
                                @foreach($expedidos as $expedido)
                                    @if( old('expedido',$registro->expedido)==$expedido->id)
                                    <option value="{{$expedido['id']}}" selected>{{$expedido['lugar']}}</option>
                                    @else
                                    <option value="{{$expedido['id']}}">{{$expedido['lugar']}}</option>
                                    @endif
                                @endforeach
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
                        <input class="form-control{{ $errors->has('domicilio') ? ' is-invalid' : '' }}" name="domicilio" id="id_domicilio" type="text" placeholder="{{ __('Direccion Domicilio') }}" value="{{ old('domicilio',$registro->domicilio) }}" />
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
                        <input class="form-control{{ $errors->has('celular') ? ' is-invalid' : '' }}" name="celular" id="id_celular" type="number" placeholder="{{ __('Numero de Celular') }}" value="{{ old('celular',$registro->celular) }}" />
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
                            @foreach($cargos as $cargo)
                                @if (old('cargo',$registro->cargo)==$cargo->id)
                                <option value="{{$cargo['id']}}" selected>{{$cargo['descripcion']}}</option>
                                @else
                                <option value="{{$cargo['id']}}">{{$cargo['descripcion']}}</option>
                                @endif
                            @endforeach
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
                                  <input class="form-check-input" type="radio" name="tipo" id="inlineRadio1" value="1" {{ old('tipo',$registro->tipo)==1?'checked':''}}> Estandar
                                  <span class="circle">
                                      <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                              <div class="p-2 form-check form-check-radio form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="tipo" id="inlineRadio2" value="2" {{ old('tipo',$registro->tipo)==2?'checked':''}}> Administrador
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
                            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="id_correo" type="email" placeholder="{{ __('Correo Electronico') }}" value="{{ old('email',$registro->email) }}" required/>
                            @if ($errors->has('email'))
                              <span id="email-error" class="error text-danger" for="id_correo">{{ $errors->first('email') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>

                      <div class="row">
                          <label class="col-sm-2 pt-3 col-form-label text-secondary" for="id_pass">{{ __(' Contrase??a ') }}</label>
                          <div class="col-sm-9">
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                              <input class="form-control{{ $errors->has('pass') ? ' is-invalid' : '' }}" name="password" id="id_pass" type="password" placeholder="{{ __('Contrase??a') }}" value="{{ old('password')}}" />
                              @if ($errors->has('password'))
                                <span id="name-error" class="error text-danger" for="id_pass">{{ $errors->first('password') }}</span>
                              @endif
                            </div>
                          </div>
                        </div>
                        <div class="alert alert-default alert-with-icon alert-sm bg-warning" >
                            <i class="material-icons text-dark" data-notify="icon">vpn_key</i>
                            <span data-notify="message">Si deja la contrase??a en blanco, se tomara la anterior por defecto</span>
                          </div>

                </div>
                <div class="text-center" style="background-color:rgb(242, 239, 239);">
                    <br><input type="submit" class="btn btn-success active btn-lg" value={{ __('Modificar') }} /><br><br>
                  </div>
            </div>

          </form>


        </div>
      </div>





    </div>
  </div>



@endsection
