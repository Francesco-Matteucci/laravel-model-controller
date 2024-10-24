<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Movie App')</title>
    @vite('resources/js/app.js')
</head>
<body class="d-flex flex-column">
    <header>
        @include('partials.header')
    </header>

    <main class="flex-grow-1 overflow-auto py-2">
        @yield('content')
    </main>

    <footer>
        @include('partials.footer')
    </footer>

</body>
</html>
