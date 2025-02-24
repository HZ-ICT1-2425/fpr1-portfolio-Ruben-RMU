<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
<header class="upbar">
    <div class="titlebar">
        <h1 class="title">Welcome!</h1>
    </div>
    <nav class="navbar" id="navbar">
        <h1>Pages:</h1>
        <div class="links">
            <a href="{{route('welcome')}}"><button class="button">[Home Page]</button></a>
            <a href="{{route('profile')}}"><button class="button">[About Me]</button></a>
            <a href="{{route('dashboard')}}"><button class="button">[Dashboard]</button></a>
            <a href="{{route('faq')}}"><button class="button">[FAQ]</button></a>
            <a href="{{route('posts')}}"><button class="button">[Blog]</button></a>
        </div>
    </nav>
</header>
<div class="content">
    @yield('content')
</div>
</body>
</html>
