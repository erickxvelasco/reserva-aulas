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
                    <label class="col-sm-2 pt-3 col-form-label text-secondary">{{ __(' Rango de Horas ') }}</label>
                    <div class="col-sm-4">
                        <div class="form-group{{ $errors->has('expedido') ? ' has-danger' : '' }}">
                            <select name="expedido" class="form-control " style="position: relative;top: -5px;">

                            </select>
                           @if ($errors->has('expedido'))
                            <span id="name-error" class="error text-danger" for="id_nombre">{{ $errors->first('expedido') }}</span>
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



                  <br>
                </div>{{--end cardbody--}}

                  <div class="col-12">
                    <div class="card">
                      <div class="card-header card-header-tabs card-header-warning">
                        <div class="nav-tabs-navigation">
                          <div class="nav-tabs-wrapper">
                            <span class="nav-tabs-title">Aulas Disponibles:</span>
                            <ul class="nav nav-tabs" data-tabs="tabs">
                              <li class="nav-item">
                                <a class="nav-link active" href="#profile" data-toggle="tab">
                                  <i class="material-icons">Generar Permutaciones</i> Bugs
                                  <div class="ripple-container"></div>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="tab-content">
                          <div class="tab-pane active" id="profile">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td>
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="" checked>
                                        <span class="form-check-sign">
                                          <span class="check"></span>
                                        </span>
                                      </label>
                                    </div>
                                  </td>
                                  <td>Sign contract for "What are conference organizers afraid of?"</td>
                                  <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                      <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                      <i class="material-icons">close</i>
                                    </button>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-sign">
                                          <span class="check"></span>
                                        </span>
                                      </label>
                                    </div>
                                  </td>
                                  <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                  <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                      <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                      <i class="material-icons">close</i>
                                    </button>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-sign">
                                          <span class="check"></span>
                                        </span>
                                      </label>
                                    </div>
                                  </td>
                                  <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                  </td>
                                  <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                      <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                      <i class="material-icons">close</i>
                                    </button>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="" checked>
                                        <span class="form-check-sign">
                                          <span class="check"></span>
                                        </span>
                                      </label>
                                    </div>
                                  </td>
                                  <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                  <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                      <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                      <i class="material-icons">close</i>
                                    </button>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="tab-pane" id="messages">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td>
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="" checked>
                                        <span class="form-check-sign">
                                          <span class="check"></span>
                                        </span>
                                      </label>
                                    </div>
                                  </td>
                                  <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                  </td>
                                  <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                      <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                      <i class="material-icons">close</i>
                                    </button>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-sign">
                                          <span class="check"></span>
                                        </span>
                                      </label>
                                    </div>
                                  </td>
                                  <td>Sign contract for "What are conference organizers afraid of?"</td>
                                  <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                      <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                      <i class="material-icons">close</i>
                                    </button>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="tab-pane" id="settings">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td>
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-sign">
                                          <span class="check"></span>
                                        </span>
                                      </label>
                                    </div>
                                  </td>
                                  <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                  <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                      <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                      <i class="material-icons">close</i>
                                    </button>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="" checked>
                                        <span class="form-check-sign">
                                          <span class="check"></span>
                                        </span>
                                      </label>
                                    </div>
                                  </td>
                                  <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                  </td>
                                  <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                      <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                      <i class="material-icons">close</i>
                                    </button>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="" checked>
                                        <span class="form-check-sign">
                                          <span class="check"></span>
                                        </span>
                                      </label>
                                    </div>
                                  </td>
                                  <td>Sign contract for "What are conference organizers afraid of?"</td>
                                  <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                      <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                      <i class="material-icons">close</i>
                                    </button>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
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
