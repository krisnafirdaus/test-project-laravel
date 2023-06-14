@extends('layouts.app')

@section('content')
    <h1>Paket Jasa</h1>
    @foreach($paketjasas as $paket)
        <div>
            <h3>{{ $paket['nama_paket'] }} - Rp{{ $paket['harga'] }}</h3>
            <p>Deskripsi: {{ $paket['deskripsi'] }}</p>
        </div>
    @endforeach
@endsection
