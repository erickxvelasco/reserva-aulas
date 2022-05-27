@extends('layouts.app', ['activePage' => 'gestion.create', 'titlePage' => __(' Registrar gestion')])
{{-- @include('modal.add_materia') --}}

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('gestion.store') }}" autocomplete="off" class="form-horizontal"
                        name="form">
                        @csrf
                        @method('POST')
                        {{-- <h1>{{$errors}}}</h1> --}}

                        <div class="card animate__animated animate__jackInTheBox">
                            <div class="card-header card-header-success">
                                <h4 class="card-title">{{ __('Registrar Gestion') }}</h4>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <label
                                        class="col-sm-2 pt-3 col-form-label text-secondary">{{ __('Gestion ') }}</label>
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

                                @php
                                    $inicio = Carbon\Carbon::now();
                                    //$inicio = $inicio->addDay(1);
                                    $inicio = $inicio->format('Y-m-d');

                                    $final = Carbon\Carbon::now();
                                    $final = $final->addDay(20);
                                    $final = $final->format('Y-m-d');
                                    /* $_inicio = Carbon\Carbon::parse(today());
                                    $_inicio = $_inicio->format('d/m/y');

                                    $_final = Carbon\Carbon::parse(today());
                                    $_final = $_final->format('d/m/y'); */

                                @endphp


                                <div class="row">
                                    <label
                                        class="col-sm-2 pt-3 col-form-label text-secondary">{{ __(' Fecha Inicio ') }}</label>
                                    <div class="col-sm-8">
                                        <div class="form-group{{ $errors->has('inicio') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('inicio') ? ' is-invalid' : '' }}"
                                                name="inicio" id="id_inicio" type="date" placeholder="sss"
                                                value="{{ old('inicio', $inicio) }}"
                                                min="{{ $inicio }}"
                                                required="true" />
                                            @if ($errors->has('inicio'))
                                                <span id="name-error" class="error text-danger"
                                                    for="id_inicio">{{ $errors->first('inicio') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label
                                        class="col-sm-2 pt-3 col-form-label text-secondary">{{ __(' Fecha Final ') }}</label>
                                    <div class="col-sm-8">
                                        <div class="form-group{{ $errors->has('final') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('final') ? ' is-invalid' : '' }}"
                                                name="final" id="id_final" type="date" placeholder="sss"
                                                value="{{ old('final', $final) }}"
                                                min="{{ $final }}"
                                                required="true" />
                                            @if ($errors->has('final'))
                                                <span id="name-error" class="error text-danger"
                                                    for="id_final">{{ $errors->first('final') }}</span>
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
