<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Finance Tracker') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/YOUR_FONT_AWESOME_KIT.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100 text-gray-900 ">

    <main>
        @yield('content')
    </main>

    <x-copyright bgaround="bg-gray-100 border-0 text-black" hide="hidden"/>

</body>
</html>