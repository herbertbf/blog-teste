@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Artigos</h1>

    @auth
    <a href="{{ route('articles.create') }}" class="btn btn-primary">Criar Novo Artigo</a>
    @endauth

    @foreach ($articles as $article)
    <div class="card my-3">
        <div class="card-body">
            <h2>{{ $article->title }}</h2>
            <p>{{ Str::limit($article->content, 150) }}</p>
            <a href="{{ route('articles.show', $article) }}" class="btn btn-secondary">Leia Mais</a>
        </div>
    </div>
    @endforeach

    {{ $articles->links() }}
</div>
@endsection
