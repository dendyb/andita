<nav class="fixed top-0 left-0 z-50 w-full h-16 bg-white border-b border-slate-200">
    <div class="flex items-center justify-between h-full px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center space-x-3">
            <img 
                src="{{ asset('images/iconAnditaSmall.webp') }}" 
                alt="Andita"
                class="w-8 h-8"
            >
            <span class="text-xl font-bold text-slate-900">
                Andita
            </span>
        </a>

        {{-- Desktop Menu --}}
        <div class="items-center hidden gap-8 text-sm font-medium md:flex">
            <a href="{{ route('home') }}" class="transition hover:text-blue-700">Home</a>
            <a href="{{ route('layanan') }}" class="transition hover:text-blue-700">Layanan</a>
            <a href="{{ route('portofolio') }}" class="transition hover:text-blue-700">Portofolio</a>
            <a href="{{ route('kontak') }}" class="transition hover:text-blue-700">Kontak</a>

            <a href="{{ route('kontak') }}"
               class="px-5 py-2 text-white transition bg-blue-700 rounded-lg hover:bg-blue-800">
                Konsultasi
            </a>
        </div>

        {{-- Mobile Button --}}
        <button id="mobile-menu-btn" class="md:hidden">
            ☰
        </button>
    </div>

    {{-- Mobile Dropdown --}}
    <div id="mobile-menu" class="hidden bg-white border-t md:hidden border-slate-200">
        <div class="flex flex-col gap-3 px-4 py-4 text-sm font-medium">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('layanan') }}">Layanan</a>
            <a href="{{ route('portofolio') }}">Portofolio</a>
            <a href="{{ route('kontak') }}">Kontak</a>
            <a href="{{ route('kontak') }}"
               class="py-2 mt-2 text-center text-white bg-blue-700 rounded-lg">
                Konsultasi
            </a>
        </div>
    </div>
</nav>

<script>
document.getElementById('mobile-menu-btn').addEventListener('click', function(){
    document.getElementById('mobile-menu').classList.toggle('hidden');
});
</script>