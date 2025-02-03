<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-goodlife-beige overflow-x-hidden">
    @include('partials.navbar')
    <main id="app">
        @yield('content')
        <a href="{{ $contact->contact_links[0]['link'] }}" target="_blank" class="fixed bottom-4 right-4 z-30">
            <img src="{{ asset('img/whatsapp.png') }}" alt="WhatsApp" class="w-12 h-12">
        </a>
    </main>
    @include('partials.footer')
</body>
</html>
