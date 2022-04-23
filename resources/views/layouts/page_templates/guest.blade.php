@include('layouts.navbars.navs.guest')
<div class="wrapper wrapper-full-page">
  <div class="page-header login-page header-filter" filter-color="green"
  style="background-color:rgb(255, 252, 252);background-image: url('{{ asset('material') }}/img/login4.png');
  background-size: cover;
   background-position: left top;
   align-items: center;" data-color="rose">
  <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
    @yield('content')
    @include('layouts.footers.auth')
  </div>
</div>
