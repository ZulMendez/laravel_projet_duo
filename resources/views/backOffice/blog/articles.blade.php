@extends('layouts.back')

@section('content')
    <div class="container">
        <h1>Page Home Blog</h1>
        <h4>Liste d'articles</h4>
        <div>
            <a href={{route('articles.create')}}>Ajouter un article</a>
            <a href={{route('admin')}}>Retour backoffice</a>
        </div>
        <div class="row">
            @foreach ($blog as $article)
            <div class="col-6">
                <p><span>Numéro article: </span>
                {{$article->id}}</p>

                <p><span>Titre: </span>
                {{$article->titre}}</p>

                <p><span>Image: </span>
                {{$article->image}}</p>

                <p><span>Description: </span>
                {{$article->description}}</p>
                <form method="post" action={{route('articles.destroy', $article->id)}}>
                    @csrf
                    @method('DELETE')
                    <button type="submit">DELETE</button>
                </form>
            </div>
            @endforeach
        </div>
    </div>
@endsection