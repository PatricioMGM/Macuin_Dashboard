<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>
    <style> @yield('style') </style>
    <script> @yield('script') </script>
    <link rel="stylesheet" href=" {{ asset('styles/template.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/footer.css') }}">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <header>
        @include('partials.menu')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('partials.footer')
    </footer>
</body>

</html>
