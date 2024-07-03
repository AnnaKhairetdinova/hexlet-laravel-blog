@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <a href="{{ route('articles.show', $article) }}">{{$article->name}}</a>

        <a href="{{ route('articles.edit', $article) }}">Обновить категорию</a>

        <a href="{{ route('articles.destroy', $article) }}" data-confirm="Вы уверены?" data-method="delete" rel="nofollow">Удалить</a>
        <div>{{$article->body}}</div>
    @endforeach
@endsection
