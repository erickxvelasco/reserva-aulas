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
        <li class="nav-item{{ $activePage == 'recibido' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('recibido.llegada') }}">
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


        <li class="nav-item {{ strpos($activePage,'user') === false ? '':'active' }} " >
            {{--<li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">--}}
            <a class="nav-link border border-default" data-toggle="collapse" href="#usercollapse" aria-expanded="{{ strpos($activePage,'user') === false ? 'false':'true' }}" name="usuario">
              <i class="material-icons">manage_accounts</i>
              <p>{{ __('Usuarios') }}
                <b class="caret"></b>
              </p>
            </a>
            <div class="px-3 collapse {{ strpos($activePage,'user') === false ? '':'show' }}" id="usercollapse">
              <ul class="nav">
                <li class="nav-item{{ ($activePage == 'user.index'|| $activePage == 'user.edit') ? ' active' : '' }}">
                  <a class="nav-link" href="{{ route('user.index') }}" name="listarusuario">
                    <i class="material-icons">list_alt</i>
                    <span class="sidebar-normal">{{ __('Listar Usuarios') }} </span>
                  </a>
                </li>
                <li class="nav-item {{ $activePage == 'user.create' ? ' active' : '' }}">
                    <a class="nav-link" href="{{ route('user.create') }}" name="registrarusuario">
                    <i class="material-icons">person_add_alt</i>
                    <span class="sidebar-normal"> {{ __('Registrar Usuario') }} </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item {{ strpos($activePage,'materia') === false ? '':'active' }}" >
            {{--<li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">--}}
            <a class="nav-link border border-default" data-toggle="collapse" href="#materiascollapse" aria-expanded="{{ strpos($activePage,'materia') === false ? 'false':'true' }}">
              <i class="material-icons">table_chart</i>
              <p>{{ __('Materias y grupos') }}
                <b class="caret"></b>
              </p>
            </a>
            <div class="px-3 collapse {{ strpos($activePage,'materia') === false ? '':'show' }}" id="materiascollapse">
              <ul class="nav">
                <li class="nav-item {{ strpos($activePage,'materia.materia') === false ? '':'active' }}">
                  <a class="nav-link" href="{{ route('materia.index') }}">
                    <i class="material-icons">science</i>
                    <span class="sidebar-normal">{{ __('Administrar Materias') }} </span>
                  </a>
                </li>
                <li class="nav-item {{ strpos($activePage,'materia.grupo') === false ? '':'active' }}">
                    <a class="nav-link" href="{{ route('grupo.index') }}">
                    <i class="material-icons">pages</i>
                    <span class="sidebar-normal"> {{ __('Administrar Grupos') }} </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item {{ strpos($activePage,'aula') === false ? '':'active' }}" >
            {{--<li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">--}}
            <a class="nav-link border border-default" data-toggle="collapse" href="#aulascollapse" aria-expanded="{{ strpos($activePage,'materia') === false ? 'false':'true' }}">
              <i class="material-icons">tune</i>
              <p>{{ __('Aulas y Ubicaciones') }}
                <b class="caret"></b>
              </p>
            </a>
            <div class="px-3 collapse {{ strpos($activePage,'aula') === false ? '':'show' }}" id="aulascollapse">
            <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="">
                    <i class="material-icons">apartment</i>
                    <span class="sidebar-normal">{{ __('Administrar Ubicaciones') }} </span>
                  </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="">
                    <i class="material-icons">density_medium</i>
                    <span class="sidebar-normal"> {{ __('Administrar plantas') }} </span>
                  </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="">
                    <i class="material-icons">store</i>
                    <span class="sidebar-normal"> {{ __('Administrar Aulas') }} </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>



        <hr>
        <li class="nav-item {{ $activePage == 'profile'  ? ' active' : '' }}">
          {{--<li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">--}}
          <a class="nav-link border border-default" data-toggle="collapse" href="#cuentacollapse" aria-expanded="false">
            <i class="material-icons text-rose">perm_contact_calendar</i>
            <p class="text-rose"><b> {{auth()->user()->nombres}}</b>
              <b class="caret"></b>
            </p>
          </a>
          <div class="px-3 collapse " id="cuentacollapse">
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
