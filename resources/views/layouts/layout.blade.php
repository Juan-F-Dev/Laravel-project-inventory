<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Proyecto Laravel')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <main class="container mx-auto px-4">
        @yield('content')
    </main>
</body>

</html>
