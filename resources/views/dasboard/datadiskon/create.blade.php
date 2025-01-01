@extends('layouts-dashboard.app')

@section('content')
<div class="container mt-4">
    <h1>Tambah Diskon</h1>

    <form action="/diskon" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Nama Diskon</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group mb-3">
            <label for="percentage">Persentase Diskon (%)</label>
            <input type="number" class="form-control" id="percentage" name="percentage" min="0" max="100" required>
        </div>
        <div class="form-group mb-3">
            <label for="start_date">Tanggal Mulai</label>
            <input type="date" class="form-control" id="start_date" name="start_date" required>
        </div>
        <div class="form-group mb-3">
            <label for="end_date">Tanggal Berakhir</label>
            <input type="date" class="form-control" id="end_date" name="end_date" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
