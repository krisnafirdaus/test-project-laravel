@extends('layouts.app')

@section('content')
    <h1>Perusahaan</h1>
    <div>
        <h3>{{ $perusahaan['nama'] }}</h3>
        <p>Lokasi: {{ $perusahaan['lokasi'] }}</p>
        <p>Kontak: {{ $perusahaan['kontak'] }}</p>
    </div>
@endsection
