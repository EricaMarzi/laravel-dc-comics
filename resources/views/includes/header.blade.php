<header>
    <div class="container-header">
        <div class="logo">
            <img src="{{asset('images/dc-logo.png')}}" alt="logo">
        </div>

        <ul class="navbar">
            @foreach(config('header_links') as $link)
            <li>
                <a href="{{route($link)}}" class="{{Route::is($link) ? 'active' : '' }}">{{$link}}</a>
            </li>
            @endforeach
        </ul>
    </div>
    <section class="jumbotron">
        <div class="jumbotron-bg"></div>
    </section>
</header>