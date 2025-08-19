<!DOCTYPE html>
<html lang="en" class="h-dvh m-0">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Finance Tracker') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css', 'resources/js/app.js')
    <script src="https://kit.fontawesome.com/YOUR_FONT_AWESOME_KIT.js" crossorigin="anonymous"></script>
     
</head>
<body class="font-sans antialiased flex flex-col bg-gray-50 text-gray-900 min-h-dvh">

    <x-navbar class="basis-1/4"/>

    <main class="flex flex-row basis-2/4" >
        <x-sidebar class="basis-1/4 min-h-screen bg-white border-r md:basis-0" />
        <div class="basis-3/4 md:basis-full p-4">
            @yield('content')
        </div>
    </main>

    <x-copyright class="basis-1/4" /> 
</body>
</html>
