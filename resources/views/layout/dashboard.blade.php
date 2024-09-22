@extends('layout.base')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <h1>Welcome to your Dashboard, {{ Auth::user()->name }}!</h1>
        <!-- You can add more dashboard content here -->
    </div>
@endsection
