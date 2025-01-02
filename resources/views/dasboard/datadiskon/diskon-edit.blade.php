@extends('layouts-dashboard.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="my-4">Edit Diskon</h1>

            <form action="{{ route('diskon.update', $discounts->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Diskon</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $discounts->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="percentage" class="form-label">Presentase</label>
                    <input type="text" class="form-control" id="percentage" name="percentage" value="{{ old('percentage', $discounts->percentage) }}" required>
                </div>

                <div class="mb-3">
                    <label for="start_date" class="form-label">Tanggal Mulai</label>
                    <input type="date" class="form-control" id="start_date" name="start_date" value="{{ old('start_date', $discounts->start_date) }}" required>
                </div>

                <div class="mb-3">
                    <label for="end_date" class="form-label">Tanggal Berakhir</label>
                    <input type="date" class="form-control" id="end_date" name="end_date" value="{{ old('end_date', $discounts->end_date) }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Update Diskon</button>
                <a href="{{ route('diskon.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection