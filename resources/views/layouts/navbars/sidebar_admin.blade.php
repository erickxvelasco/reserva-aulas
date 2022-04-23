<div class="sidebar" data-color="orange" data-background-color="green" data-image="{{ asset('material') }}/img/sansi.png">
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
              <i class="material-icons">all_inbox</i>
                <p>{{ __('Solicitudes Recibidas') }}</p>
            </a>
          </li>
          <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
            <a class="nav-link" href="">
              <i class="material-icons">schedule</i>
                <p>{{ __('Historial de reservas') }}</p>
            </a>
          </li>


        <li class="nav-item {{ (!strpos($activePage,'user')) ? ' active' : '' }}" >
            {{--<li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">--}}
            <a class="nav-link" data-toggle="collapse" href="#usercollapse" aria-expanded="false">
              <i class="material-icons">manage_accounts</i>
              <p>{{ __('Usuarios') }}
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse {{ (!strpos($activePage,'user')) ? ' show' : '' }}" id="usercollapse">
              <ul class="nav">
                <li class="nav-item{{ ($activePage == 'user.index'|| $activePage == 'user.edit') ? ' active' : '' }}">
                  <a class="nav-link" href="{{ route('user.index') }}">
                    <i class="material-icons">list_alt</i>
                    <span class="sidebar-normal">{{ __('Listar Usuarios') }} </span>
                  </a>
                </li>
                <li class="nav-item {{ $activePage == 'user.create' ? ' active' : '' }}">
                    <a class="nav-link" href="{{ route('user.create') }}">
                    <i class="material-icons">person_add_alt</i>
                    <span class="sidebar-normal"> {{ __('Registrar Usuario') }} </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item " >
            {{--<li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">--}}
            <a class="nav-link" data-toggle="collapse" href="#materiascollapse" aria-expanded="false">
              <i class="material-icons">table_chart</i>
              <p>{{ __('Materias y grupos') }}
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="materiascollapse">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="">
                    <i class="material-icons">science</i>
                    <span class="sidebar-normal">{{ __('Administrar Materias') }} </span>
                  </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="">
                    <i class="material-icons">pages</i>
                    <span class="sidebar-normal"> {{ __('Administrar Grupos') }} </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item " >
            {{--<li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">--}}
            <a class="nav-link" data-toggle="collapse" href="#aulascollapse" aria-expanded="false">
              <i class="material-icons">store</i>
              <p>{{ __('Aulas') }}
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="aulascollapse">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="">
                    <i class="material-icons">list_alt</i>
                    <span class="sidebar-normal">{{ __('Listar Aulas') }} </span>
                  </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="">
                    <i class="material-icons">add_business</i>
                    <span class="sidebar-normal"> {{ __('Registrar Aulas') }} </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>



        <hr>
        <li class="nav-item {{ $activePage == 'profile'  ? ' active' : '' }}">
          {{--<li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">--}}
          <a class="nav-link" data-toggle="collapse" href="#cuentacollapse" aria-expanded="false">
            <i class="material-icons text-rose">perm_contact_calendar</i>
            <p class="text-rose"><b> {{auth()->user()->nombres}}</b>
              <b class="caret"></b>
            </p>
          </a>
          <div class="collapse " id="cuentacollapse">
            <ul class="nav">
              <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
                <a class="nav-link" href="">
                  <i class="material-icons ">settings</i>
                  <span class="sidebar-normal"><b>{{ __('mi Cuenta') }} </b></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                  <i class="material-icons text-rose">exit_to_app</i>
                  <span class="sidebar-normal text-rose"><b> {{ __('Cerrar Sesión') }}</b> </span>
                </a>
              </li>
            </ul>
          </div>
        </li>

      </ul>
    </div>
  </div>
