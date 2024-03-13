@extends('layouts.main')
@section('main-content')
<div class="container">
    <div class="row-main">
        <div class="col-main">
            @foreach($comics as $index => $poster)
            <div class="card-main"><a href='{{url("/comics/$index")}}'>

                    <img class="poster" src="{{$poster['thumb']}}" alt="{{$poster['title']}}">
                </a>
                <label>
                    <div class="title">{{$poster['series']}}</div>
                </label>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection