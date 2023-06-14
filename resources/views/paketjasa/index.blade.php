@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Paket Jasa</h1>
    @foreach($paketjasas as $paket)
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">{{ $paket['nama_paket'] }} - Rp{{ $paket['harga'] }}</h5>
            <p class="card-text">Deskripsi: {{ $paket['deskripsi'] }}</p>
        </div>
    </div>
    @endforeach
</div>
@endsection
