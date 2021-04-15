@extends('layouts.index')

@section('content')
<main id="main" class="site-main">

    <section class="site-section-small section-blog">
        <div class="container">
    <h1>Blog</h1>
    <form method="POST" action={{route('articles.store')}}>
        @csrf
        <label for="titre">Titre</label>
        <input type="text" name="titre">

        <hr>

        <label for="image">Image</label>
        <input type="text" name="image">

        <hr>

        <label for="description">Description</label>
        <input type="text" name="description">

        <button type="submit">Submit</button>
    </form>
        </div>
    </section>
</main>
@endsection