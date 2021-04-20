{{-- @extends('layouts.index')

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
@endsection --}}

@extends('layouts.back')

@section('content')
<main id="" class="">
    <section class="">
        <div class="container bg-white p-5">
            <h1 class="text-center">BACK OFFICE | dashboard</h1>
            <a href="{{route('home')}}" class="text-white mx-auto my-auto p-2 rounded">Retour vers le site</a>
            <div class="d-flex justify-content-center my-3">
                <div class=""> 
                    <div class="card mx-auto my-3">
                        <div class="card-body">
                            <h4 class="card-title">Modification Home</h4>
                            <p class="card-text">CRUD home</p>
                            <a class="btn bg-success" href="">Direction HOME</a>
                        </div>
                    </div>
                </div>
                <div class=""> 
                    <div class="card mx-auto my-3">
                        <div class="card-body">
                            <h4 class="card-title">Modification about</h4>
                            <p class="card-text">CRUD about</p>
                            <a class="btn bg-success" href={{route('articles.index')}}>Direction blog</a>
                        </div>
                    </div>
                </div>
                <div class=" "> 
                    <div class="card mx-auto my-3">
                        <div class="card-body">
                            <h4 class="card-title">Modification product</h4>
                            <p class="card-text">CRUD product</p>
                            <a class="btn bg-success" href={{route('cards.index')}}>Direction portfolio</a>
                        </div>
                    </div>
                </div>
                <div class=" "> 
                    <div class="card mx-auto my-3">
                        <div class="card-body">
                            <h4 class="card-title">Modification store</h4>
                            <p class="card-text">CRUD store</p>
                            <a class="btn bg-success" href="">Direction contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection