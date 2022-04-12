@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Reserva Aulas')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row justify-content-center">
      <div class="col-lg-10 col-md-10">
        <br><br>
          <h1 class="text-dark text-center">{{ __('Bienvenido al Sistema de Reserva de Aulas') }}</h1>
      </div>
  </div>
</div>
@endsection
