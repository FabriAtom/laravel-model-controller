@extends('layouts.app')

@section('metaTitle','Page Movie')
    
@section('content')

<h1 class="h1">Page Movie</h1>
<div class="container">
    @foreach ($movies as $movie)
    <div class="flex">
        <div class="card">
            <h3>{{ $movie->title }}</h3>
            <p>{{ $movie->original_title }}</p>
            <p>{{ $movie->nationality }}</p>
            <p>{{ $movie->date }}</p>
            <p>{{ $movie->vote }}</p>
        </div>       
        @endforeach
    </div>
</div>
@endsection