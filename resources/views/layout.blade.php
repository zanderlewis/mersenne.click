<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mersenne.click | @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
    <style>
        body {
            background-color: #0a1128; /* Deep navy blue */
            color: #ffffff; /* White text for contrast */
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">
    <x-header />

    <main class="container mx-auto px-6 py-16 flex-grow">
        @yield('content')
    </main>

    <x-footer />
</body>
</html>