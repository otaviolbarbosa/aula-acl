@extends('layouts.app')

@section('content')

    @foreach($posts as $post)
        <h2>{{ $post->titulo }}</h2>
        <p>{{ $post->texto }}</p>
        <p>Autor: {{ $post->user->name }}</p>
        <a href="posts/update/{{ $post->id }}">[ Editar ]</a>
        <a href="posts/delete/{{ $post->id }}">[ Apagar ]</a>
        <hr>
    @endforeach

@endsection