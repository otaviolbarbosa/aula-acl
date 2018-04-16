@extends('layouts.main')

@section('content')
    <h2>Postagens</h2>

    @foreach($posts as $post)
        <h2>{{ $post->titulo }}</h2>
        <p>{{ $post->texto }}</p>
        <p>Autor: {{ $post->user->name }}</p>
        <hr>
    @endforeach

@endsection