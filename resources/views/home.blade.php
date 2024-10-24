@extends('layouts.app')

@section('content')
<div class="home-content text-center text-dark d-flex justify-content-center align-items-center flex-column">
    <h1 class="display-3 mb-4">Benvenuto nella nostra Movie App</h1>
    <p class="lead">Esplora la nostra collezione di film e scopri nuovi titoli.</p>
    <a href="/movies" class="btn btn-dark btn-lg mt-3">Vai alla lista dei film</a>
</div>
@endsection
