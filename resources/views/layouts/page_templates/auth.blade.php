<div class="wrapper ">
    @if (auth()->user()->tipo==1)
        @include('layouts.navbars.sidebar_estandar')
    @else
        @include('layouts.navbars.sidebar_admin')
    @endif

  <div class="main-panel">

    @include('layouts.navbars.navs.auth')
    @yield('content')
    @include('layouts.footers.auth')
  </div>
</div>
