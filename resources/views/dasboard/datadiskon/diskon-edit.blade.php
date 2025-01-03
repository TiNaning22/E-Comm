@extends('layouts-dashboard.app')

@section('content')
<div class="container mt-4">
    <div style="background-color: #333; color: white; padding: 20px; text-align: center; border-radius: 10px;">
        <h1 style="color: white">Edit Diskon</h1>
    </div>

    <form action="{{ route('diskon.update', $discounts->id) }}" method="POST" style="padding: 20px; background: #f8f9fa; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="name" style="font-weight: bold;">Nama Diskon</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $discounts->name) }}" required style="border-radius: 20px; border: 1px solid #ccc; background-color: #ffffff;">
        </div>

        <div class="form-group mb-3">
            <label for="percentage" style="font-weight: bold;">Presentase Diskon (%)</label>
            <input type="number" class="form-control" id="percentage" name="percentage" value="{{ old('percentage', $discounts->percentage) }}" required style="border-radius: 20px; border: 1px solid #ccc; background-color: #ffffff;">
        </div>

        <div class="form-group mb-3">
            <label for="start_date" style="font-weight: bold;">Tanggal Mulai</label>
            <input type="date" class="form-control" id="start_date" name="start_date" value="{{ old('start_date', $discounts->start_date) }}" required style="border-radius: 20px; border: 1px solid #ccc; background-color: #ffffff;">
        </div>

        <div class="form-group mb-3">
            <label for="end_date" style="font-weight: bold;">Tanggal Berakhir</label>
            <input type="date" class="form-control" id="end_date" name="end_date" value="{{ old('end_date', $discounts->end_date) }}" required style="border-radius: 20px; border: 1px solid #ccc; background-color: #ffffff;">
        </div>

        <div style="display: flex; justify-content: space-between;">
            <button type="submit" class="btn btn-dark" style="border-radius: 20px; width: 100px;">Update</button>
            <a href="{{ route('diskon.index') }}" class="btn btn-secondary" style="border-radius: 20px; width: 100px;">Batal</a>
        </div>
    </form>
</div>

@endsection