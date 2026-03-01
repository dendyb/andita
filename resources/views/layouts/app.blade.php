<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Andita')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="overflow-x-hidden antialiased bg-white text-slate-900">

    @include('partials.nav')

    <main class="pt-16">
        @yield('content')
    </main>

    @include('partials.footer')

    <script>
        lucide.createIcons();
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        lucide.createIcons();
    });
</script>
</body>
</html>