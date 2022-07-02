@extends('layouts.app', ['activePage' => 'aula.aula.edit', 'titlePage' => __(' Editar Aula')])
{{-- @include('modal.add_materia') --}}

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('aula.update',$registro) }}" autocomplete="off" class="form-horizontal"
                        name="form">
                        @csrf
                        @method('PATCH')
                        {{-- <h1>{{$errors}}}</h1> --}}

                        <div class="card animate__animated animate__jackInTheBox">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Registrar Aula') }}</h4>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <label
                                        class="col-sm-2 pt-3 col-form-label text-secondary">{{ __(' Ubicacion ') }}</label>
                                    <div class="col-sm-8">
                                        <div class="form-group{{ $errors->has('expedido') ? ' has-danger' : '' }}">
                                            <select name="planta" id="planta" class="js-example-responsive"
                                            style="width: 100%;">
                                                @foreach ($ubicaciones as $ubicacion)
                                                    <optgroup label="{{ $ubicacion->ubicacion }}">

                                                        @foreach ($ubicacion->relacion_plantas as $planta)
                                                        @if (old('planta',$registro->planta)==$planta->id)
                                                            <option value="{{ $planta->id }}" selected>
                                                                {{ $planta->planta }}</option>
                                                            @else
                                                            <option value="{{ $planta->id }}">
                                                                {{ $planta->planta }}</option>
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
                                        class="col-sm-2 pt-3 col-form-label text-secondary">{{ __('Aula ') }}</label>
                                    <div class="col-sm-8">
                                        <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }}">
                                            <input autocomplete="off"
                                                class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}"
                                                name="nombre" id="id_nombre" type="text"
                                                placeholder="{{ __('Aula') }}" value="{{ old('nombre',$registro->nombre) }}"
                                                required="true" />
                                            @if ($errors->has('nombre'))
                                                <span id="name-error" class="error text-danger"
                                                    for="id_aula">{{ $errors->first('nombre') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label
                                        class="col-sm-2 pt-3 col-form-label text-secondary">{{ __(' Aula Sig ') }}</label>
                                    <div class="col-sm-8">
                                        <div class="form-group{{ $errors->has('expedido') ? ' has-danger' : '' }}">
                                            <select name="aulasig" id="aulasig" class="js-example-responsive"
                                            style="width: 100%;">
                                            {{-- <optgroup label="Aulas"> --}}
                                                <option value="0" selected>
                                                    Ninguno</option>
                                                @foreach ($aulas as $aula)


                                                        @if (old('aulasig',$registro->aulasig)==$aula->id)
                                                        <option value="{{ $aula->id }}" selected>
                                                            {{ $aula->nombre }}</option>
                                                        @else
                                                        <option value="{{ $aula->id }}">
                                                            {{ $aula->nombre }}</option>
                                                        @endif

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
                                        class="col-sm-2 pt-3 col-form-label text-secondary">{{ __('Capacidad ') }}</label>
                                    <div class="col-sm-8">
                                        <div class="form-group{{ $errors->has('capacidad') ? ' has-danger' : '' }}">
                                            <input autocomplete="off"
                                                class="form-control{{ $errors->has('capacidad') ? ' is-invalid' : '' }}"
                                                name="capacidad" id="id_inscritos" type="number"
                                                placeholder="{{ __('Capacidad') }}" value="{{ old('capacidad',$registro->capacidad) }}"
                                                required="true" min="0" max="500"/>
                                            @if ($errors->has('capacidad'))
                                                <span id="name-error" class="error text-danger"
                                                    for="id_capacidad">{{ $errors->first('capacidad') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="text-center" style="background-color:rgb(242, 239, 239);">
                                    <input type="submit" class="btn btn-primary " value={{ __('Registrar') }}>

                                </div>
                            </div>



                    </form>


                </div>
            </div>





        </div>
    </div>

    <script>
        $('#planta').select2({
            theme: "classic"
        });
        $('#aulasig').select2({
            theme: "classic"
        });
    </script>
@endsection
                                            {{--'nombre',
                                                'capacidad',
                                                'aulasig',
                                                'planta',
                                                'detalle'
                                            --}}
