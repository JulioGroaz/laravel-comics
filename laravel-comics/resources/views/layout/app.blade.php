<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-comics</title>

    @vite('resources/js/app.js')
</head>
<body>
    <header>
        @yield('header-content')
    </header>

    <main>
        @yield('main-content')
    </main>

    <footer>
        @yield('footer-content')
    </footer>
</body>
</html>
