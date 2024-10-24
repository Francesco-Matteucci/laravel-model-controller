@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4 text-center">Lista dei Film</h1>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">Titolo Originale: {{ $movie->original_title }}</p>
                            <p class="card-text">Nazionalità: {{ $movie->nationality }}</p>
                            <p class="card-text">Anno: {{ $movie->date }}</p>
                            <p class="card-text">Votazione: {{ $movie->vote }}/10</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
