@extends('layouts.app')

@section('content')
    <div class="main-content">
        <h3>Test page</h3>
        <p>{{ $content }}</p>
        <small>Your ID: {{ $id }}</small>
    </div>
@endsection