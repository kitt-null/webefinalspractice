<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    
</head>

<body>

    <header>
    <nav>
        <a href="{{route('welcome')}}">Welcome</a>
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('profile')}}">Profile</a>
        <a href="{{route('events')}}">Events</a>
        <a href="{{route('news')}}">News</a>
        <a href="{{route('contact')}}">Contact Us</a>

        @if(auth()->check())
            <a href="{{route('logout')}}">Log Out</a>

        @else
            <a href="{{route('login')}}">Log In</a>
            <a href="{{route('register')}}">Register</a>

        @endif

    </nav>
</header>

    @yield('content')

</body>
</html>