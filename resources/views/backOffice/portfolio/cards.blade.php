@extends('layouts.back')

@section('content')
    <div class="container my-5">
        <h1 class="text-center">Page Home Portfolio</h1>
        <h4 class="text-center my-2">Liste cartes</h4>
        <div class="d-flex justify-content-around my-2">
            <a class="btn btn-outline-primary" href={{route('cards.create')}}>Ajouter une carte</a>
            <a class="btn btn-outline-secondary" href={{route('admin')}}>Retour backoffice</a>
        </div>
        <div class="row">
            @foreach ($portfolio as $card)
                <div class="col-6 text-center border rounded my-3 p-3">
                    <p><span class="font-weight-bold">Numéro article:</span>
                    {{$card->id}}</p>

                    <p><span class="font-weight-bold">Titre: </span>
                    {{$card->titre}}</p>

                    <p><span class="font-weight-bold">Image: </span>
                    {{$card->image}}</p>

                    <p><span class="font-weight-bold">Description: </span>
                    {{$card->description}}</p>

                    <a href="{{route('cards.show', $card->id)}}" class="btn btn-primary">DETAILS</a>
                    <a href="{{route('cards.edit', $card->id)}}" class="btn btn-success">EDIT</a>
                    <form method="post" action={{route('cards.destroy', $card->id)}}>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">DELETE</button>
                    </form>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
@endsection