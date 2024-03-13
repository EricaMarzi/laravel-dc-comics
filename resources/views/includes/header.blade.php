<header>
    <div class="container-header">
        <div class="logo">
            <img src="{{asset('images/dc-logo.png')}}" alt="logo">
        </div>

        <ul class="navbar">
            <li>
                <a href="{{route('characters')}}" class="{{Route::is('characters') ? 'active' : '' }}">Characters</a>
            </li>
            <li>
                <a href="{{route('comics.index')}}" class="{{Route::is('comics.index') ? 'active' : '' }}">Comics</a>
            </li>
            <li>
                <a href="{{route('movie')}}" class="{{Route::is('movie') ? 'active' : '' }}">Movie</a>
            </li>
            <li>
                <a href="{{route('TV')}}" class="{{Route::is('TV') ? 'active' : '' }}">TV</a>
            </li>
            <li>
                <a href="{{route('games')}}" class="{{Route::is('games') ? 'active' : '' }}">games</a>
            </li>
            <li>
                <a href="{{route('collectibles')}}" class="{{Route::is('collectibles') ? 'active' : '' }}">Collectibles</a>
            </li>
            <li>
                <a href="{{route('videos')}}" class="{{Route::is('videos') ? 'active' : '' }}">Videos</a>
            </li>
            <li>
                <a href="{{route('fans')}}" class="{{Route::is('fans') ? 'active' : '' }}">Fans</a>
            </li>
            <li>
                <a href="{{route('news')}}" class="{{Route::is('news') ? 'active' : '' }}">News</a>
            </li>
            <li>
                <a href="{{route('shop')}}" class="{{Route::is('shop') ? 'active' : '' }}">Shop</a>
            </li>
        </ul>
    </div>
    <section class="jumbotron">
        <div class="jumbotron-bg"></div>
    </section>
</header>