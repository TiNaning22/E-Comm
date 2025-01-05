@extends('layouts-dashboard.app')

@section('content')
    <div class="container mt-5">
        <h2>Detail Alamat</h2>

     
        
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Tanggal Pesan</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($checkout as $checkout)
                        <tr>
                            <td>{{ $checkout->nama }}</td>
                            <td>{{ $checkout->alamat }}</td>
                            <td>{{ $checkout->created_at->format('d M Y H:i') }}</td>
                        </tr>
                      @endforeach
                </tbody>
            </table>
       
      
    </div>
@endsection