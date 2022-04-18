@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Reserva Aulas')])

@section('content')
    @auth
        @if (auth()->user()->estado==2)

            {{ auth()->logout() }}
            {{--redirect()->route('login')->with('status','Usuario Modificado con Exito!!!') --}}
        @endif
    @endauth

<div class="container" style="height: auto;">
  <div class="row justify-content-center">
      <div class="col-lg-10 col-md-10">
        <br><br>
            <div data-color="orange"><div>
          <h1 class="text-dark text-center">{{ __('Bienvenido al Sistema de Reserva de Aulas') }}</h1>
      </div>
  </div>
</div>
@endsection
