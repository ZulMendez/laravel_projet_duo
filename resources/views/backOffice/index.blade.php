@extends('layouts.back')

@section('content')
<main id="" class="">
    <section class="">
        <div class="container bg-white p-5">
            <h1 class="text-center">BACK OFFICE | dashboard</h1>
            <a href="{{route('home')}}" class="btn btn-secondary mx-auto my-auto p-2 rounded">Retour vers le site</a>
            <div class="row my-3">
                <div class="col-6"> 
                    <div class="card text-center mx-auto my-3">
                        <div class="card-body">
                            <h4 class="card-title">Modification Home</h4>
                            <p class="card-text">CRUD home</p>
                            <a class="btn bg-success" href={{route('admin')}}>Home</a>
                        </div>
                    </div>
                </div>
                <div class="col-6"> 
                    <div class="card text-center mx-auto my-3">
                        <div class="card-body">
                            <h4 class="card-title">Modification about</h4>
                            <p class="card-text">CRUD about</p>
                            <a class="btn bg-success" href={{route('articles.index')}}>Blog</a>
                        </div>
                    </div>
                </div>
                <div class="col-6"> 
                    <div class="card text-center mx-auto my-3">
                        <div class="card-body">
                            <h4 class="card-title">Modification product</h4>
                            <p class="card-text">CRUD product</p>
                            <a class="btn bg-success" href={{route('cards.index')}}>Portfolio</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 "> 
                    <div class="card text-center mx-auto my-3">
                        <div class="card-body">
                            <h4 class="card-title">Modification store</h4>
                            <p class="card-text">CRUD store</p>
                            <a class="btn bg-success" href="">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection