<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'KFS Ravangrad') }}</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-neutral-light">
    <div id="app">
        <div class="flex flex-col">
            <navbar-component :user="{{ Auth::user() ? Auth::user()->toJson() : 'null' }}"></navbar-component>

            <main class="flex flex-row h-screen font-body text-3xl md:text-2xl">
                <div class="hidden md:flex md:w-1/4 md:h-screen lg:w-1/5">
                    @yield('sidebar')
                </div>
                <div class="flex flex-col w-full md:w-3/4 lg:w-4/5">
                    <div class="bg-secondary h-24 md:h-16">
                        @yield('content-header')
                    </div>
                    <div class="bg-secondary w-full h-screen">
                        @yield('content')
                    </div>
                </div>

            </main>
        </div>
    </div>
</body>
</html>
