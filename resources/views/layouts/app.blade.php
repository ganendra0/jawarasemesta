<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Jawara Semesta provides software development, cloud solutions, digital transformation, and IT consulting services for modern businesses.">
        <meta name="keywords" content="Jawara Semesta, IT consultant, software development, cloud solutions, digital transformation, website development">
        <meta name="author" content="Jawara Semesta">
        <meta property="og:title" content="Jawara Semesta - Smart Digital Solutions">
        <meta property="og:description" content="Smart digital solutions for modern businesses.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url('/') }}">

        <title>{{ $title ?? 'Jawara Semesta - Smart Digital Solutions' }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white font-sans text-slate-900 antialiased">
        <x-navbar />

        <main>
            @yield('content')
        </main>

        <x-footer />
    </body>
</html>
