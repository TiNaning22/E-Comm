@extends('layouts-dashboard.app')

@section('content')
<div class="container">
  <h1>Detail Transaksi</h1>
  <p>Berikut adalah data transaksi dan grafik penjualan.</p>
  
  <!-- Grafik Penjualan -->
  <h2>Grafik Penjualan</h2>
  <canvas id="salesChart" width="400" height="200"></canvas>

  <!-- Tabel Data Transaksi -->
  <h2 class="mt-4">Tabel Data Transaksi</h2>
  @if(!empty($checkout) && count($checkout) > 0)
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Metode Pembayaran</th>
        <th>Tanggal</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($checkout as $checkout)
      <tr>
        <td>{{ $checkout->nama }}</td>
        <td>{{ $checkout->email }}</td>
        <td>{{ $checkout->alamat }}</td>
        <td>{{ $checkout->payment_method }}</td>
        <td>{{ $checkout->created_at->format('d M Y H:i') }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @else
  <p class="text-danger">Tidak ada data transaksi.</p>
  @endif

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const ctx = document.getElementById('salesChart').getContext('2d');
    const salesChart = new Chart(ctx, {
      type: 'bar', // Tipe grafik, bisa diganti sesuai kebutuhan
      data: {
        labels: {!! isset($months) ? json_encode($months) : '[]' !!}, // Bulan penjualan dari backend
        datasets: [{
          label: 'Penjualan',
          data: {!! isset($salesData) ? json_encode($salesData) : '[]' !!}, // Data penjualan dari backend
          backgroundColor: 'rgba(75, 192, 192, 0.2)',
          borderColor: 'rgba(75, 192, 192, 1)',
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
</div>
@endsection