@extends('layouts-dashboard.app')

@section('content')
<div class="container-fluid">
    <!-- Row untuk Waktu, Cuaca, dan Statistik -->
    <div class="row">
        <!-- Waktu Saat Ini -->
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-header">
                    <h5>Waktu Saat Ini</h5>
                </div>
                <div class="card-body" style="height: 230px;">
                    <h2 id="current-time">10:43:32</h2>
                    <p id="current-date">Rabu, 8 Januari 2025</p>
                </div>
            </div>
        </div>

        <!-- Statistik Cepat -->
        <div class="col-md-4">
            <div class="card" style="height: 300px;">
                <div class="card-header">
                    <h5>Statistik Cepat</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <strong>Total Penjualan Hari Ini:</strong> 2000 IDR
                        </li>
                        <li class="list-group-item">
                            <strong>Total Pelanggan:</strong> 1000
                        </li>
                        <li class="list-group-item">
                            <strong>Penjualan Bulan Ini:</strong> 35000 IDR
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Cuaca Hari Ini -->
        <div class="col-md-4">
            <div class="card" style="height: 300px;">
                <div class="card-header">
                    <h5>Cuaca Hari Ini</h5>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img src="https://img.icons8.com/ios/452/sun.png" alt="Cerah" width="50" height="50">
                        <p><strong>Suhu:</strong> 22°C</p>
                        <p><strong>Kondisi:</strong> Cerah</p>
                        <p><strong>Kelembapan:</strong> 30%</p>
                        <p><strong>Angin:</strong> 15 km/h</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Row untuk Grafik Penjualan -->
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Grafik Penjualan</h5>
                </div>
                <div class="card-body">
                    <canvas id="salesChart" style="height: 400px; width: 100%;"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

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
@endsection
