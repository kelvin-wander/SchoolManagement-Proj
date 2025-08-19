<!DOCTYPE html>
<html lang="en" class="h-dvh m-0">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Finance Tracker') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/YOUR_FONT_AWESOME_KIT.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-50 text-gray-900 min-h-dvh">

    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer/>
    <x-copyright /> <!-- ':' tells blade template to intepretes the attributes value as a php expression -->

</body>
</html>
