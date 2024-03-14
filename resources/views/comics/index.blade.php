@extends('layouts.main')
@section('title', 'Comics')

@section('cdns')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@endsection

@section('main-content')
<div class="container">
    <div class="row-main">
        <div class="col-main">
            @foreach($comics as $comic)
            <div class="card-main">
                <a href="{{route('comics.show', ['comic' => $comic -> id])}}">

                    <img class="poster" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                </a>
                <label>
                    <div class="title">{{$comic['series']}}</div>
                </label>
            </div>
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-end my-5">
        <a href="" class="btn-custom">Aggiungi Fumetto</a>
    </div>
</div>
@endsection