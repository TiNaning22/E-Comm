<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
  <!-- User Info -->
  <div class="menu">
    <ul class="list">

      <li class="header">LABELS</li>
      <li>
        <a href="javascript:void(0);">
          <i class="material-icons col-red">donut_large</i>
          <span>Produk</span>
        </a>
      </li>
      <li>
        <a href="/kategori">
          <i class="material-icons col-amber">donut_large</i>
          <span>Kategori</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-toggle="collapse" data-target="#penjualanMenu" aria-expanded="false">
          <i class="material-icons col-light-blue">donut_large</i>
          <span>Penjualan</span>
        </a>
        <ul id="penjualanMenu" class="collapse list-unstyled">
          <li>
            <a href="/penjualan/detail-transaksi">
              <i class="material-icons">receipt</i>
              <span>Detail Transaksi</span>
            </a>
          </li>
          <li>
            <a href="/penjualan/detail-alamat">
              <i class="material-icons">location_on</i>
              <span>Detail Alamat</span>
            </a>
          </li>
          <li>
            <a href="/penjualan/detail-pengiriman">
              <i class="material-icons">local_shipping</i>
              <span>Detail Pengiriman</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="{{ route('dasboard.datauser.user') }}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>Data User</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/diskon" class="nav-link">
            <i class="nav-icon fas fa-tags"></i>
            <p>Data Diskon</p>
        </a>
      </li>
    </ul>
  </div>
</aside>
<!-- #END# Left Sidebar -->
