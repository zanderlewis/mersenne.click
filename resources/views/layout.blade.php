<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mersenne.click | @yield('title')</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #0f172a; /* Tailwind slate-900 */
            color: #f1f5f9; /* Tailwind slate-100 */
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col bg-gradient-to-br from-slate-900 to-slate-800">
    <x-header />

    <main class="container mx-auto px-4 sm:px-6 py-12 sm:py-16 grow">
        @yield('content')
    </main>

    <x-footer />
</body>
</html>