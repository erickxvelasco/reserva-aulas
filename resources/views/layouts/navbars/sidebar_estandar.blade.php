<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->


  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      {{ __('Reserva de Aulas') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'reserva' ? ' active' : '' }}">
        <a class="nav-link" href=""> {{--href="{{ route('home') }}">--}}
          <i class="material-icons">add_box</i>
            <p>{{ __('Nueva Solicitud') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="">
          <i class="material-icons">work_history</i>
            <p>{{ __('Historial') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="">
          <i class="material-icons">science</i>
            <p>{{ __('Mis Materias') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="">
          <i class="material-icons">store</i>
            <p>{{ __('Aulas') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notificaciones') }}</p>
        </a>
      </li>

      <hr>
      <li class="nav-item {{ $activePage == 'profile'  ? ' active' : '' }}">
        {{--<li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">--}}
        <a class="nav-link" data-toggle="collapse" href="#cuentacollapse" aria-expanded="false">
          <i class="material-icons">perm_contact_calendar</i>
          <p>{{ __('Cuenta') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse " id="cuentacollapse">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="">
                <i class="material-icons">settings</i>
                <span class="sidebar-normal">{{ __('mi Cuenta') }} </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="material-icons">exit_to_app</i>
                <span class="sidebar-normal text-danger"> {{ __('Cerrar Sesión') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>


    </ul>
  </div>
</div>
