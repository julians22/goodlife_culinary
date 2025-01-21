<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goodlife Culinary</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>

    <main id="app">
        @yield('content')
    </main>

    @vite('resources/js/app.js')

    @stack('scripts')
</body>
</html>
