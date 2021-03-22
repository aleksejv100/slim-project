@extends('layouts.app')

@section('content')
<div class="main-content">
    <h3>Home page {{ config('app.name')}}</h3>
    <p>{{ $content }}</p>
</div>
@endsection