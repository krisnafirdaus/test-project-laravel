@extends('layouts.app')

@section('content')
    <h1>Kendaraan</h1>
    @foreach($kendaraans as $kendaraan)
        <div>
            <h3>{{ $kendaraan['merk'] }} {{ $kendaraan['model'] }} - {{ $kendaraan['tipe'] }}</h3>
            <p>Jumlah: {{ $kendaraan['jumlah'] }}</p>
        </div>
    @endforeach
@endsection
