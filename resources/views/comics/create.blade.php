@extends('layouts.main')
@section('title', 'Add Comic')

@section('cdns')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@endsection

@section('main-content')
<div class="container">
    <form action="{{route('comics.store')}}" method="POST" class="my-5">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label text-white">Titolo</label>
            <input type="text" name="title" class="form-control" id="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label text-white">Descrizione</label>
            <textarea name="description" class="form-control" placeholder="Leave a comment here" id="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label text-white">Url immagine</label>
            <input type="text" name="thumb" class="form-control" id="thumb">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label text-white">Prezzo</label>
            <input type="text" name="price" class="form-control" id="price">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label text-white">Serie</label>
            <input type="text" name="series" class="form-control" id="series">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label text-white">Data di pubblicazione (anno/mese/giorno)</label>
            <input type="text" name="sale_date" class="form-control" id="sale_date">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label text-white">Tipo</label>
            <input type="text" name="type" class="form-control" id="type">
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label text-white">Disegnatori</label>
            <textarea name="artists" class="form-control" placeholder="Leave a comment here" id="artists"></textarea>
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label text-white">Scrittori</label>
            <textarea name="writers" class="form-control" placeholder="Leave a comment here" id="writers"></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection