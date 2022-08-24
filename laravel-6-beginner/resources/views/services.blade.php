@extends('app')

@section('title', 'Services')

@section('content')
    <h1>Welcome to laravel 6 from Services</h1>

    <ul>
        @forelse($services as $service)
            <li>{{ $service }}</li>
        
        @empty
            <li>No services available.</li>
        @endforelse
    </ul>

@endsection