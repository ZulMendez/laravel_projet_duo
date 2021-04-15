@extends('layouts.index')

@section('content')
    <h1>Portfolio</h1>
    <form method="POST" action={{route('cards.store')}}>
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
@endsection