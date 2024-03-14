@extends('layouts.main')
@section('title', 'Comics')
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
</div>
@endsection