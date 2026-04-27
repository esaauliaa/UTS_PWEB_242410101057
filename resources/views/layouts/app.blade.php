<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloom Bouquet</title>
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="page-wrapper">

        @if (request()->path() !== '/')
            @include('components.navbar')
        @endif

        <main class="{{ request()->path() === '/' ? '' : 'main-content' }}">
            @yield('content')
        </main>

        @if (request()->path() !== '/')
            <x-footer />
        @endif

    </div>
</body>
</html>
