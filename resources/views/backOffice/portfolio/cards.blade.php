@extends('layouts.back')

@section('content')
    <div class="container">
        <h1>Page Home Blog</h1>
        <h4>Liste d'articles</h4>
        <div>
            <a href={{route('cards.create')}}>Ajouter un article</a>
            <a href={{route('admin')}}>Retour backoffice</a>
        </div>
        <div class="row">
            @foreach ($portfolio as $card)
                <div class="col-6">
                    <p><span>Numéro article:</span>
                    {{$card->id}}</p>

                    <p><span>Titre: </span>
                    {{$card->titre}}</p>

                    <p><span>Image: </span>
                    {{$card->image}}</p>

                    <p><span>Description: </span>
                    {{$card->description}}</p>
                    <form method="post" action={{route('cards.destroy', $card->id)}}>
                        @csrf
                        @method('DELETE')
                        <button type="submit">DELETE</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection