@extends('layouts.index')

@section('content')
<main id="main" class="site-main">

    <section class="site-section-small section-blog">
        <div class="container">
    <h2>Blog</h2>
    <a href={{route('articles.create')}}>Add</a>

    <h2>Portfolio</h2>
    <a href={{route('cards.create')}}>Add</a>
        </div>
    </section>
</main>
@endsection