@extends('layouts.app')

@section('content')
    <h1>Trainer</h1>
    @foreach($trainers as $trainer)
        <div>
            <h3>{{ $trainer['nama'] }}</h3>
            <p>Pengalaman: {{ $trainer['pengalaman'] }}</p>
        </div>
    @endforeach
@endsection
