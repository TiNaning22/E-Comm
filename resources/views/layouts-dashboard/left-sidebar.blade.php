<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
  <!-- User Info -->
  <!-- #User Info -->
  <!-- Menu -->
  <div class="menu">
    <ul class="list">
      <li class="header">{{ __('MENU UTAMA') }}</li>
      <li>
        
          <i class="material-icons">home</i>
          <span>{{ __('Dashboard') }}</span>
        </a>
      </li>
      <li>
        <a href="../../pages/typography.html">
          <i class="material-icons">text_fields</i>
          <span>Nama Menu</span>
        </a>
      </li>

      <li>
        <a href="javascript:void(0);" class="menu-toggle">
          <i class="material-icons">swap_calls</i>
          <span>Dengan Sub Menu</span>
        </a>
        <ul class="ml-menu">
          @foreach (range(1, 5) as $item)
            <li>
              <a href="../../pages/ui/alerts.html">Menu {{ $item }}</a>
            </li>
          @endforeach
        </ul>
      </li>

      <li>
        <a href="javascript:void(0);" class="menu-toggle">
          <i class="material-icons">widgets</i>
          <span>Dengan Sub Sub Menu</span>
        </a>
        <ul class="ml-menu">

          @foreach (range(1, 4) as $item)
            <li>
              <a href="javascript:void(0);" class="menu-toggle">
                <span>Menu {{ $item }}</span>
              </a>
              <ul class="ml-menu">
                @foreach (range(1, 4) as $item2)
                  <li>
                    <a href="../../pages/widgets/cards/basic.html">Sub Menu {{ $item2 }}</a>
                  </li>
                @endforeach
              </ul>
            </li>
          @endforeach
        </ul>
      </li>

      <li>
        <a href="">
          <i class="material-icons">settings</i>
          <span>{{ __('Settings') }}</span>
        </a>
      </li>
      <li>
        <a href="../changelogs.html">
          <i class="material-icons">update</i>
          <span>{{ __('Whats New') }}</span>
        </a>
      </li>
      <li>
        <a href="../changelogs.html">
          <i class="material-icons">input</i>
          <span>{{ __('Logout') }}</span>
        </a>
      </li>

      {{-- <li class="header">LABELS</li>
      <li>
        <a href="javascript:void(0);">
          <i class="material-icons col-red">donut_large</i>
          <span>Important</span>
        </a>
      </li>
      <li>
        <a href="javascript:void(0);">
          <i class="material-icons col-amber">donut_large</i>
          <span>Warning</span>
        </a>
      </li>
      <li>
        <a href="javascript:void(0);">
          <i class="material-icons col-light-blue">donut_large</i>
          <span>Information</span>
        </a>
      </li> --}}
    </ul>
  </div>

</aside>
<!-- #END# Left Sidebar -->
