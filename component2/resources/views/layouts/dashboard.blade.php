@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Welcome, {{ Auth::user()->name }}</h1>
        <p>You are logged in!</p>
    </div>
@endsection