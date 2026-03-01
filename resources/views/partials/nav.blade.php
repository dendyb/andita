{{-- resources/views/partials/nav.blade.php --}}
<nav class="fixed top-0 left-0 z-50 w-full h-16 border-b bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-sm border-slate-200 dark:border-slate-800">
    <div class="flex items-center justify-between h-full px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <span class="text-xl font-bold text-slate-900 dark:text-white">Andita</span>
        </a>

        {{-- Desktop Menu --}}
        <div class="items-center hidden gap-8 text-sm font-medium md:flex">
            <a href="{{ route('home') }}"       class="transition text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary">Home</a>
            <a href="{{ route('layanan') }}"    class="transition text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary">Layanan</a>
            <a href="{{ route('portofolio') }}" class="transition text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary">Portofolio</a>
            <a href="{{ route('kontak') }}"     class="transition text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary">Kontak</a>

            <a href="{{ route('kontak') }}"
               class="px-5 py-2 text-sm font-bold text-white transition rounded-lg bg-primary hover:bg-primary-dark">
                Konsultasi
            </a>
        </div>

        {{-- Mobile Menu Button --}}
        <button id="mobile-menu-btn"
                class="text-slate-700 dark:text-slate-200 md:hidden"
                aria-label="Toggle menu">
            <span class="material-symbols-outlined">menu</span>
        </button>
    </div>

    {{-- Mobile Dropdown --}}
    <div id="mobile-menu"
         class="hidden border-t md:hidden bg-background-light dark:bg-background-dark border-slate-200 dark:border-slate-800">
        <div class="flex flex-col gap-1 px-4 py-4 text-sm font-medium">
            <a href="{{ route('home') }}"       class="px-3 py-2 transition rounded-lg text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-primary dark:hover:text-primary">Home</a>
            <a href="{{ route('layanan') }}"    class="px-3 py-2 transition rounded-lg text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-primary dark:hover:text-primary">Layanan</a>
            <a href="{{ route('portofolio') }}" class="px-3 py-2 transition rounded-lg text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-primary dark:hover:text-primary">Portofolio</a>
            <a href="{{ route('kontak') }}"     class="px-3 py-2 transition rounded-lg text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-primary dark:hover:text-primary">Kontak</a>
            <a href="{{ route('kontak') }}"
               class="mt-2 px-3 py-2.5 text-center font-bold text-white rounded-lg bg-primary hover:bg-primary-dark transition">
                Konsultasi
            </a>
        </div>
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-btn').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>