@extends('layouts.app', ['activePage' => 'materia.edit', 'titlePage' => __(' Actualizar Materia')])
{{-- @include('modal.add_materia') --}}

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                   {{--  @dd($registro) --}}
                   <form method="post" action="{{ route('materia.update',$registro ) }}" autocomplete="off" class="form-horizontal" name="form">
                    @csrf
                    @method('patch')
                        {{-- <h1>{{$errors}}}</h1> --}}

                        <div class="card animate__animated animate__jackInTheBox">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Actualizar Materia') }}</h4>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <label
                                        class="col-sm-2 pt-3 col-form-label text-secondary">{{ __('Materia ') }}</label>
                                    <div class="col-sm-8">
                                        <div class="form-group{{ $errors->has('descripcion') ? ' has-danger' : '' }}">
                                            <input autocomplete="off"
                                                class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}"
                                                name="descripcion" id="id_materia" type="text"
                                                placeholder="{{ __('Materia') }}"
                                                value="{{ old('descripcion', $registro->descripcion) }}" required="true" />
                                            @if ($errors->has('descripcion'))
                                                <span id="name-error" class="error text-danger"
                                                    for="id_materia">{{ $errors->first('descripcion') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label
                                        class="col-sm-2 pt-3 col-form-label text-secondary">{{ __(' Departamento ') }}</label>
                                    <div class="col-sm-8">
                                        <div class="form-group{{ $errors->has('expedido') ? ' has-danger' : '' }}">
                                            <select name="departamento" class="form-control "
                                                style="position: relative;top: -5px;">
                                                @foreach ($departamentos as $departamento)
                                                    @if (old('departamento', $registro->departamento) == $departamento['departamento'])
                                                        <option value="{{ $departamento['departamento'] }}" selected>
                                                            {{ $departamento['departamento'] }}</option>
                                                    @else
                                                        <option value="{{ $departamento['departamento'] }}">
                                                            {{ $departamento['departamento'] }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            @if ($errors->has('departamento'))
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
@endsection
