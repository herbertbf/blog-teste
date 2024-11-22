@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->content }}</p>
    @auth
    <a href="{{ route('articles.edit', $article) }}" class="btn btn-warning">Editar</a>
    <form action="{{ route('articles.destroy', $article) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Excluir</button>
    </form>
    @endauth
</div>
@endsection
