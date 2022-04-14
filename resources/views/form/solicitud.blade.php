@extends('layouts.app',['activePage' => 'reserva', 'titlePage' => 'formulario'])
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="content">
  <div class="container-fluid">
    <div class="card">
              <div class="card-header card-header-success">
                <h2 class="text-center font-size 1.1rem;">FORMULARIO RESERVA</h2>
              </div>
           <div class="card-body">
           <div class="row">
           <div class="container">
            <div class="row justify-content-center">
            <div class="col-20 col-lg-8 bg-light form-demo rounded mt-5">
                <hr class="bg-light w-75">
                <form action="{{ url('form') }}" method="post" id="formulario-ejemplo" class="w-75 mx-auto" class="form-search">
                @csrf
                <div class="form-group " aria-label="Default select example" >
                        <h5 style:font-size:35px >Materia</h5>
                        <div class="d-flex" >

                            <input class="form-select"  style="width:auto" aria-label="Default select example" name="materia" placeholder="Search" ">
                        </div>
                <br>
                </div>
                    <div class="form-group">
                        <h5>Total Estudiantes</h5>
                        <input class="form-select"  style="width:auto" aria-label="Default select example" type="number" name="total" max='200' min='1'>
                    </div>
                    <br>
                    <div class="form-group">
                        <h5>Seleccione motivo</h5>
                        <select class="form-select" name="motivo"style="width:auto" aria-label="Default select example">
                        <option value="" disabled selected hidden>Seleccione</option>
                         <option value="Examen">Examen</option>
                          <option value="Laboratorio">Laboratorio</option>
                          <option value="Conferencia">Conferencia</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <h5>Fecha</h5>
                        <input class="form-select" name="fecha" style="width:auto" aria-label="Default select example" type="date" >
                    </div>
                    <br>
                    <div class="form-group">
                        <h5>Hora inicio</h5>
                        <select class="form-select" name="inicio" style="width:auto" aria-label="Default select example">
                          <option value="" disabled selected hidden>Seleccione</option>
                          <option value="6:45">6:45</option>
                          <option value="8:15">8:15</option>
                          <option value="9:45">9:45</option>
                          <option value="11:!5">11:15</option>
                          <option value="12:45">12:45</option>
                          <option value="13:15">13:15</option>
                          <option value="15:45">15:45</option>
                          <option value="17:15">17:15</option>
                          <option value="19:45">19:45</option>
                          <option value="21:45">21:45</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <h5>Hora fin</h5>
                        <select class="form-select" name="fin" style="width:auto" aria-label="Default select example">
                        <option value="" disabled selected hidden>Seleccione</option>
                          <option value="6:45">6:45</option>
                          <option value="8:15">8:15</option>
                          <option value="9:45">9:45</option>
                          <option value="11:!5">11:15</option>
                          <option value="12:45">12:45</option>
                          <option value="13:15">13:15</option>
                          <option value="15:45">15:45</option>
                          <option value="17:15">17:15</option>
                          <option value="19:45">19:45</option>
                          <option value="21:45">21:45</option>
                        </select>
                    </div>
                    <br>
                    <div class="text-center">
                    <button class="btn btn-info btn-responsive btninter" name="enviar" id="enviar" type="submit"> enviar</button>
                    <button class="btn btn-info btn-responsive btninter right" type="submit" >cancelar</button>
                    </div>
                    <br>
                    <br>
                </form>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
