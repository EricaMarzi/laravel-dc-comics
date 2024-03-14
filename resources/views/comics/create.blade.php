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
            <textarea class="form-control" placeholder="Leave a comment here" id="comic-description">
            <!-- <input type="text" class="form-control" id="comic-description"> -->
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection