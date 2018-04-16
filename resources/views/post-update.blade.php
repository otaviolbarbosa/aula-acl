@extends('layouts.app')

@section('content')

        <h2>Editar: {{ $post->titulo }}</h2>
        <p>{{ $post->texto }}</p>
        <p>Autor: {{ $post->user->name }}</p>

@endsection