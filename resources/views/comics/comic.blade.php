@extends('layouts.main')
@section('cdns')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('main-content')
<section class="comic">
    <figure>
        <div class="info-comic book">Comic book</div>
        <img src="{{$comics['thumb']}}" alt="{{$comics['title']}}">
        <div class="info-comic gallery">View gallery</div>
    </figure>
    <div class="container flex">
        <div class="description">
            <h1 class="comic-title">{{$comics['title']}}</h1>
            <div class="buy-info">
                <div class="price-available">
                    <div class="price"><span>U.S. Price:</span> {{$comics['price']}}</div>
                    <div class="available">Available</div>
                </div>
                <div class="check">Check Availability <i class="fa-solid fa-caret-down"></i></div>
            </div>
            <p>{{$comics['description']}}</p>
        </div>
        <div class="adv">
            <img src="{{asset('images/adv.jpg')}}" alt="Power Visa">
        </div>
    </div>
</section>
<section class="details">
    <div class="container flex">
        <div class="talent">
            <h2>Talent</h2>
            <div class="info">
                <h5>Art by:</h5>
                <p>
                    <span>
                        @foreach($comics['artists'] as $artist)
                        {{$artist}}
                        @endforeach
                    </span>
                </p>
            </div>
            <div class="info">
                <h5>Written by:</h5>
                <p>
                    <span>
                        @foreach($comics['writers'] as $writer)
                        {{$writer}}
                        @endforeach
                    </span>
                </p>
            </div>
        </div>
        <div class="specs">
            <h2>Specs</h2>
            <div class="info">
                <h5>Series:</h5>
                <p><span class="series">{{$comics['series']}}</span></p>
            </div>
            <div class="info">
                <h5>U.S. Price:</h5>
                <p>{{$comics['price']}}</p>
            </div>
            <div class="info">
                <h5>On Sale Date:</h5>
                <p>{{$comics['sale_date']}}</p>
            </div>
        </div>
    </div>
</section>
@endsection