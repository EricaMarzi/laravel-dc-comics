@extends('layouts.main')
@section('title', 'Add Comic')

@section('cdns')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@endsection

@section('main-content')
<div class="container">
    <form action="" method="POST" class="my-5">
        <div class="mb-3">
            <label for="comic-title" class="form-label text-white">Titolo</label>
            <input type="text" class="form-control" id="comic-title">
        </div>
        <div class="mb-3">
            <label for="comic-description" class="form-label text-white">Descrizione</label>
            <textarea class="form-control" placeholder="Leave a comment here" id="comic-description"></textarea>
        </div>
        <div class="mb-3">
            <label for="comic-thumb" class="form-label text-white">Immagine</label>
            <input type="text" class="form-control" id="comic-thumb">
        </div>
        <div class="mb-3">
            <label for="comic-price" class="form-label text-white">Prezzo</label>
            <input type="text" class="form-control" id="comic-price">
        </div>
        <div class="mb-3">
            <label for="comic-series" class="form-label text-white">Serie</label>
            <input type="text" class="form-control" id="comic-series">
        </div>
        <div class="mb-3">
            <label for="comic-date" class="form-label text-white">Data di pubblicazione</label>
            <input type="text" class="form-control" id="comic-date">
        </div>
        <div class="mb-3">
            <label for="comic-type" class="form-label text-white">Tipo</label>
            <input type="text" class="form-control" id="comic-type">
        </div>
        <div class="mb-3">
            <label for="comic-artists" class="form-label text-white">Disegnatori</label>
            <textarea class="form-control" placeholder="Leave a comment here" id="comic-artists"></textarea>
        </div>
        <div class="mb-3">
            <label for="comic-writers" class="form-label text-white">Scrittori</label>
            <textarea class="form-control" placeholder="Leave a comment here" id="comic-writers"></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection