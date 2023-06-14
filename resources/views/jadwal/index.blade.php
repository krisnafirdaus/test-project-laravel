@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Jadwal Belajar</h1>
    @foreach($jadwals as $jadwal)
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">{{ $jadwal['hari'] }} - {{ $jadwal['jam'] }}</h5>
            <p class="card-text">Trainer: {{ $jadwal['trainer'] }}</p>
        </div>
    </div>
    @endforeach
</div>
@endsection
