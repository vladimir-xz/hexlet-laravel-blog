@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <h2><a href="{{route('articles.show', ['id' => $article->id])}}">{{$article->name}}</a></h2>
        <div>{{Str::limit($article->body, 200)}}</div>
        <a href="{{route('articles.edit', ['id' => $article->id])}}">edit</a>
        <a href="..." data-method="delete" rel="nofollow">Удалить</a>
    @endforeach
    <div>{{$articles->links()}}</div>
@endsection