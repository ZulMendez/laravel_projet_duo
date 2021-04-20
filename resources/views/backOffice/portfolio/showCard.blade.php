@extends('layouts.back')

@section('content')
    <div>
        <h1>Show card : {{$card->titre}}</h1>
        <a href="{{route('cards.index')}}">Retour home cards</a>
        <div class="card" style="width: 18rem;">
            <img src={{$card->image}} class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$card->titre}}</h5>
              <p class="card-text">{{$card->description}}</p>
              <form method="POST" action={{route('cards.destroy', $card->id)}}>
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">DELETE</button>
              </form>
            </div>
          </div>
    </div>
@endsection