@extends('layouts.back')

@section('content')
    <div>
        <h1>Show article : {{$article->titre}}</h1>
        <a href="{{route('articles.index')}}">Retour home articles</a>
        <div class="card" style="width: 18rem;">
            <img src={{$article->image}} class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$article->titre}}</h5>
              <p class="card-text">{{$article->description}}</p>
              <form method="POST" action={{route('articles.destroy', $article->id)}}>
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">DELETE</button>
              </form>
            </div>
          </div>
    </div>
@endsection