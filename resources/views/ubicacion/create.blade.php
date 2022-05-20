@extends('layouts.app', ['activePage' => 'aula.ubicacion.create', 'titlePage' => __(' Registrar Ubicacion')])
{{-- @include('modal.add_materia') --}}

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('ubicacion.store') }}" autocomplete="off" class="form-horizontal"
                        name="form">
                        @csrf
                        @method('POST')
                        {{-- <h1>{{$errors}}}</h1> --}}

                        <div class="card animate__animated animate__jackInTheBox">
                            <div class="card-header card-header-success">
                                <h4 class="card-title">{{ __('Registrar Ubicacion') }}</h4>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <label
                                        class="col-sm-2 pt-3 col-form-label text-secondary">{{ __('Ubicacion ') }}</label>
                                    <div class="col-sm-8">
                                        <div class="form-group{{ $errors->has('ubicacion') ? ' has-danger' : '' }}">
                                            <input autocomplete="off"
                                                class="form-control{{ $errors->has('ubicacion') ? ' is-invalid' : '' }}"
                                                name="ubicacion" id="id_materia" type="text"
                                                placeholder="{{ __('Ubicacion') }}" value="{{ old('ubicacion') }}"
                                                required="true" />
                                            @if ($errors->has('ubicacion'))
                                                <span id="name-error" class="error text-danger"
                                                    for="id_materia">{{ $errors->first('ubicacion') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label
                                        class="col-sm-2 pt-3 col-form-label text-secondary">{{ __('Detalle ') }}</label>
                                    <div class="col-sm-8">
                                        <div class="form-group{{ $errors->has('detalle') ? ' has-danger' : '' }}">
                                            <input autocomplete="off"
                                                class="form-control{{ $errors->has('detalle') ? ' is-invalid' : '' }}"
                                                name="detalle" id="id_detalle" type="text"
                                                placeholder="{{ __('Detalle') }}" value="{{ old('detalle') }}"
                                                required="true" />
                                            @if ($errors->has('detalle'))
                                                <span id="name-error" class="error text-danger"
                                                    for="id_detalle">{{ $errors->first('detalle') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <br>
                                <div class="text-center" style="background-color:rgb(242, 239, 239);">
                                    <input type="submit" class="btn btn-success " value={{ __('Registrar') }}>

                                </div>
                            </div>



                    </form>


                </div>
            </div>





        </div>
    </div>
@endsection
