@extends('layouts.app')

@section('content')
<div class="main-content">
    <h3>Home page {{ env('APP_NAME') }}</h3>
    <p>{{ $content }}</p>
    {{ var_dump($user) }}
</div>
@endsection