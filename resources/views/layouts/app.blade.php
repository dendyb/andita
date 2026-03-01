<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description', 'Andita IT Integrator — Infrastruktur, Jaringan, dan Solusi Digital Terpercaya.')">

    <title>@yield('title', 'Andita')</title>

    {{-- Material Symbols --}}
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    {{-- Google Fonts: Inter --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&display=swap" rel="stylesheet">

    {{-- Tailwind CSS + Lucide --}}
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script src="https://unpkg.com/lucide@latest"></script>

    {{-- Tailwind Config — defines custom color tokens used across all pages --}}
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        'primary':          '#13a4ec',
                        'primary-dark':     '#0d8fce',
                        'background-light': '#f6f7f8',
                        'background-dark':  '#101c22',
                    },
                    fontFamily: {
                        display: ['Inter', 'sans-serif'],
                    },
                },
            },
        }
    </script>
</head>

<body class="flex flex-col min-h-screen overflow-x-hidden antialiased font-display bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100">

    @include('partials.nav')

    <main class="flex-1 pt-16">
        @yield('content')
    </main>

    @include('partials.footer')

    <script>
        lucide.createIcons();
        document.addEventListener('DOMContentLoaded', function () {
            lucide.createIcons();
        });
    </script>

    @stack('scripts')

</body>
</html>