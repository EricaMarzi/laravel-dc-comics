<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME', 'DC' )}} | {{$title}}</title>
    <link rel="icon" href="{{asset('images/dc-logo.png')}}">
    @yield('cdns')

    @vite('resources/js/app.js')
</head>

<body>
    <!--Header-->
    @include('includes.header')
    <main>
        @yield('main-content')
    </main>
    <div class="bonus"></div> <!--Stai qui così ti vedo-->

    @include('includes.footer')
</body>

</html>