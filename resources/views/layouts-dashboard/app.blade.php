<!DOCTYPE html>
<html>

@include('layouts-dashboard.head')

<body class="theme-red">
  @include('layouts-dashboard.page-loader')

  <!-- Overlay For Sidebars -->
  <div class="overlay"></div>
  <!-- #END# Overlay For Sidebars -->

  @include('layouts-dashboard.search-bar')
  @include('layouts-dashboard.top-bar')

  <section>
    @include('layouts-dashboard.left-sidebar')
    @include('layouts-dashboard.right-sidebar')
  </section>

  <section class="content">
    @yield('content')
  </section>

  @include('layouts-dashboard.scripts')
</body>

</html>
