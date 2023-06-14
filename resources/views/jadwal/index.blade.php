@extends('layouts.app')

@section('content')
    <h1>Jadwal Belajar</h1>
    @foreach($jadwals as $jadwal)
        <div>
            <h3>{{ $jadwal['hari'] }} - {{ $jadwal['jam'] }}</h3>
            <p>Trainer: {{ $jadwal['trainer'] }}</p>
        </div>
    @endforeach
@endsection
