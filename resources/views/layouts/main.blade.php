<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h2>My Website</h2>
    </header>

    @include('partials.navbar')
    <main>
        @yield('content')
    </main>

    <footer>
        <p>Hak Cipta &copy; 2025</p>
    </footer>
</body>
</html>
