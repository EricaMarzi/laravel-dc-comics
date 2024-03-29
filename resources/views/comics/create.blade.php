@extends('layouts.main')
@section('title', 'Add Comic')

@section('cdns')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@endsection

@section('main-content')
<div class="container">
    <h1 class="text-white pt-3 text-center">Aggiungi informazioni</h1>
    <form action="{{route('comics.store')}}" method="POST" class="my-5">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label text-white">Titolo</label>
            <input type="text" name="title" class="form-control" id="title" value="{{old('title', '')}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label text-white">Descrizione</label>
            <textarea name="description" class="form-control" placeholder="Leave a comment here" id="description" value="{{old('description', '')}}"></textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label text-white">Url immagine</label>
            <input type="text" name="thumb" class="form-control" id="thumb" value="{{old('thumb', '')}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label text-white">Prezzo</label>
            <input type="text" name="price" class="form-control" id="price" value="{{old('price', '')}}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label text-white">Serie</label>
            <input type="text" name="series" class="form-control" id="series" value="{{old('series', '')}}">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label text-white">Data di pubblicazione (anno/mese/giorno)</label>
            <input type="text" name="sale_date" class="form-control" id="sale_date" value="{{old('sale_date', '')}}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label text-white">Tipo</label>
            <input type="text" name="type" class="form-control" id="type" value="{{old('type', '')}}">
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label text-white">Disegnatori</label>
            <textarea name="artists" class="form-control" placeholder="Leave a comment here" id="artists" value="{{old('artists', '')}}"></textarea>
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label text-white">Scrittori</label>
            <textarea name="writers" class="form-control" placeholder="Leave a comment here" id="writers" value="{{old('writers', '')}}"></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Salva</button>
        <a href="{{route('comics.index')}}" class="btn btn-secondary">Torna indietro</a>
    </form>
</div>
@endsection