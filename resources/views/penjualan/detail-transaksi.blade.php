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
  @if(!empty($transactions) && count($transactions) > 0)
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Tanggal</th>
        <th>Produk</th>
        <th>Jumlah</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($transactions as $index => $transaction)
      <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $transaction['date'] }}</td>
        <td>{{ $transaction['product'] }}</td>
        <td>{{ $transaction['quantity'] }}</td>
        <td>{{ $transaction['total'] }}</td>
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