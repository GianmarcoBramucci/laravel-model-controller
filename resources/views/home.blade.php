@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <h1>Home page</h1>
    <ul>
        @foreach ($movies as $movie)
        <li>
            <h2> {{ $movie->title }}</h2>        
        </li>
        @endforeach    
    </ul>
</main>

@endsection
