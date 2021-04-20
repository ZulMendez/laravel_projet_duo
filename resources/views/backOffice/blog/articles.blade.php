@extends('layouts.back')

@section('content')
    <div class="container my-5 bg-secondary">
        <h1 class="text-center">Page Home Blog</h1>
        <h4 class="text-center my-2">Liste articles</h4>
        <div class="d-flex justify-content-center my-2">
            <a href={{route('articles.create')}}>Ajouter un article</a>
            <a href={{route('admin')}}>Retour backoffice</a>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($blog as $article)
                <div class="col-6 border rounded my-3 p-3">
                    <p><span class="font-weight-bold">Numéro article: </span>
                    {{$article->id}}</p>
    
                    <p><span class="font-weight-bold">Titre: </span>
                    {{$article->titre}}</p>
    
                    <p><span class="font-weight-bold">Image: </span>
                    {{$article->image}}</p>
    
                    <p class="text-justify"><span class="font-weight-bold">Description: </span>
                    {{$article->description}}</p>

                    <a href="{{route('articles.show', $article->id)}}" class="btn btn-primary">DETAILS</a>
                    <a href="{{route('articles.edit', $article->id)}}" class="btn btn-success">EDIT</a>
                    <form method="post" action={{route('articles.destroy', $article->id)}}>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">DELETE</button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection