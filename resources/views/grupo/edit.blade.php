@extends('layouts.app', ['activePage' => 'materia.grupo.edit', 'titlePage' => __(' Editar Grupo')])
{{-- @include('modal.add_materia') --}}

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('grupo.update',$registro) }}" autocomplete="off" class="form-horizontal"
                        name="form">
                        @csrf
                        @method('PATCH')
                        {{-- <h1>{{$errors}}}</h1> --}}

                        <div class="card animate__animated animate__jackInTheBox">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Actualizar Grupo') }}</h4>
                            </div>
                            <div class="card-body ">

                                <div class="row">
                                    <label
                                        class="col-sm-2 pt-3 col-form-label text-secondary">{{ __(' Materia ') }}</label>
                                    <div class="col-sm-8">
                                        <div class="form-group{{ $errors->has('expedido') ? ' has-danger' : '' }}">
                                            <select name="materia" id="materia" class="js-example-responsive"
                                            style="width: 100%;">
                                                @foreach ($materias_materias as $materia_id => $materias)
                                                    <optgroup label="{{ $materia_id }}">

                                                        @foreach ($materias as $materia)
                                                            @if (old('materia',$registro->materia)==$materia->id)
                                                            <option value="{{ $materia->id }}" selected>
                                                                {{ $materia->descripcion }}</option>
                                                            @else
                                                            <option value="{{ $materia->id }}">
                                                                {{ $materia->descripcion }}</option>
                                                            @endif

                                                        @endforeach
                                                    </optgroup>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('expedido'))
                                                <span id="name-error" class="error text-danger"
                                                    for="id_nombre">{{ $errors->first('expedido') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label
                                        class="col-sm-2 pt-3 col-form-label text-secondary">{{ __('Grupo ') }}</label>
                                    <div class="col-sm-8">
                                        <div class="form-group{{ $errors->has('grupo') ? ' has-danger' : '' }}">
                                            <input autocomplete="off"
                                                class="form-control{{ $errors->has('grupo') ? ' is-invalid' : '' }}"
                                                name="grupo" id="id_grupo" type="text"
                                                placeholder="{{ __('Grupo') }}" value="{{ old('grupo',$registro->grupo) }}"
                                                required="true" />
                                            @if ($errors->has('grupo'))
                                                <span id="name-error" class="error text-danger"
                                                    for="id_grupo">{{ $errors->first('grupo') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label
                                        class="col-sm-2 pt-3 col-form-label text-secondary">{{ __('Inscritos ') }}</label>
                                    <div class="col-sm-8">
                                        <div class="form-group{{ $errors->has('inscritos') ? ' has-danger' : '' }}">
                                            <input autocomplete="off"
                                                class="form-control{{ $errors->has('inscritos') ? ' is-invalid' : '' }}"
                                                name="inscritos" id="id_inscritos" type="number"
                                                placeholder="{{ __('Incritos') }}" value="{{ old('inscritos',$registro->inscritos) }}"
                                                required="true" />
                                            @if ($errors->has('inscritos'))
                                                <span id="name-error" class="error text-danger"
                                                    for="id_inscritos">{{ $errors->first('inscritos') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label
                                        class="col-sm-2 pt-3 col-form-label text-secondary">{{ __(' Titular Asignado ') }}</label>
                                    <div class="col-sm-8">
                                        <div class="form-group{{ $errors->has('expedido') ? ' has-danger' : '' }}">
                                            <select name="usuario" id="usuario" class="js-example-responsive"
                                                style="width: 100%;">
                                                @foreach ($users as $user)
                                                    @if (old('usuario',$registro->usuario)==$user->id)
                                                    <option value="{{ $user->id }}" selected>
                                                        {{ $user->apellidos . ' ' . $user->nombres }}</option>
                                                    @else
                                                    <option value="{{ $user->id }}">
                                                        {{ $user->apellidos . ' ' . $user->nombres }}</option>
                                                    @endif

                                                @endforeach
                                            </select>
                                            @if ($errors->has('expedido'))
                                                <span id="name-error" class="error text-danger"
                                                    for="id_nombre">{{ $errors->first('expedido') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="text-center" style="background-color:rgb(242, 239, 239);">
                                    <input type="submit" class="btn btn-primary " value={{ __('Actualizar') }}>

                                </div>
                            </div>



                    </form>


                </div>
            </div>





        </div>
    </div>

    <script>
        $('#materia').select2({
            theme: "classic"
        });
        $('#usuario').select2({
            theme: "classic"
        });
    </script>
@endsection
