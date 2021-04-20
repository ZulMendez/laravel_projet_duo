@extends('layouts.back')

@section('content')

<main id="" class="">
    <section class="">
        <div class="container">
            <h1>Editer formulaire blog</h1>
            <form class="" method="POST" action={{route('articles.update', $article->id)}}>
                @csrf
                @method('PUT')
                <label for="titre">Titre</label>
                <input value={{$article->titre}} type="text" name="titre">

                <hr>

                <label for="image">Image</label>
                <input value={{$article->image}} type="text" name="image">

                <hr>

                <label for="description">Description</label>
                <input value={{$article->description}} type="text" name="description">

                <button type="submit">Submit</button>
            </form>
        </div>
    </section>
</main>
@endsection