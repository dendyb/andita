{{-- resources/views/welcome.blade.php --}}
@extends('layouts.app')

@section('title', 'Andita — IT Integrator Terpercaya')
@section('meta_description', 'Solusi integrasi IT terpercaya — infrastruktur handal, jaringan aman, dan pengembangan Aplikasi Mobile/Web.')

@section('content')

{{-- ===================== HERO ===================== --}}
<section class="relative flex items-center justify-center min-h-[600px] overflow-hidden px-4 py-20 sm:py-28 text-center"
         style='background-image: linear-gradient(rgba(16, 28, 34, 0.75) 0%, rgba(16, 28, 34, 0.88) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuAMgocm3lqW6ueqgMXynU1TBnXMglN6V9kRkBcaMW9noUSVYvGUfL0KPmaxFHZjSpjuXsRUlOyePwHd9KL8q9w6828NDS8Y4kV2XBiHonwzrv_XcH5fWF_znol6cjMarB6DA21dvSCU0_95cmIDdNY0UVRyP4X3ZwByVTCpYX5VrTe4tKgBi0MJ8DOiJGtKaAAKCd93s2pSIkPw2pk-ZRtxkn7g9dob8Oo3bUcpPa6rwjUOpEqSt6BjEl3zeOdZoSPRhuCbucWz54z6"); background-size: cover; background-position: center;'>

    {{-- Top accent line --}}
    <div class="absolute top-0 left-0 w-full h-px opacity-50 bg-gradient-to-r from-transparent via-primary to-transparent"></div>

    <div class="relative z-10 flex flex-col items-center max-w-4xl gap-6 mx-auto">

        {{-- Badge --}}
        <div class="inline-flex items-center gap-2 px-3 py-1 border rounded-full bg-primary/20 border-primary/30 backdrop-blur-md">
            <span class="relative flex w-2 h-2">
                <span class="absolute inline-flex w-full h-full rounded-full opacity-75 animate-ping bg-primary"></span>
                <span class="relative inline-flex w-2 h-2 rounded-full bg-primary"></span>
            </span>
            <span class="text-xs font-semibold tracking-wider uppercase text-primary">CV. Andita, Yogyakarta</span>
        </div>

        {{-- Heading --}}
        <h1 class="text-4xl font-black leading-tight tracking-tight text-white sm:text-5xl md:text-6xl lg:text-7xl">
            Solusi Integrasi IT <br class="hidden md:block">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-cyan-300">Terpercaya</span>
        </h1>

        {{-- Subheading --}}
        <p class="max-w-2xl text-base font-normal leading-relaxed text-slate-300 sm:text-lg md:text-xl">
            Menyediakan Infrastruktur IT, Instalasi Jaringan / Fiber Optic, dan Pengembangan Aplikasi
            Mobile/Web untuk akselerasi pertumbuhan bisnis Anda.
        </p>

        {{-- CTA Buttons --}}
        <div class="flex flex-col flex-wrap justify-center w-full gap-4 mt-4 sm:flex-row">
            <a href="{{ route('kontak') }}"
               class="flex items-center justify-center w-full gap-2 font-bold text-white transition-all rounded-lg shadow-lg sm:w-auto h-12 px-7 bg-primary hover:bg-primary-dark shadow-primary/25 hover:-translate-y-0.5">
                <span class="material-symbols-outlined text-[20px]">rocket_launch</span>
                Mulai Konsultasi
            </a>
            <a href="{{ route('portofolio') }}"
               class="flex items-center justify-center w-full h-12 gap-2 font-bold text-white transition-all border rounded-lg sm:w-auto px-7 bg-white/10 hover:bg-white/20 border-white/10 backdrop-blur-sm">
                <span class="material-symbols-outlined text-[20px]">grid_view</span>
                Lihat Portofolio
            </a>
        </div>

        {{-- Trust Indicators --}}
        <div class="w-full max-w-3xl pt-8 mt-8 border-t border-white/10">
            <p class="mb-4 text-sm font-medium tracking-widest uppercase text-slate-400">Dipercaya oleh Perusahaan Terkemuka</p>
            <div class="flex flex-wrap items-center justify-center gap-8 transition-all duration-500 opacity-60 grayscale hover:grayscale-0">
                <div class="flex items-center gap-2 text-lg font-bold text-white"><span class="material-symbols-outlined">g_translate</span> GlobalTech</div>
                <div class="flex items-center gap-2 text-lg font-bold text-white"><span class="material-symbols-outlined">account_balance</span> BankJaya</div>
                <div class="flex items-center gap-2 text-lg font-bold text-white"><span class="material-symbols-outlined">factory</span> IndiIndustries</div>
                <div class="flex items-center gap-2 text-lg font-bold text-white"><span class="material-symbols-outlined">local_shipping</span> FastLogistics</div>
            </div>
        </div>
    </div>
</section>

{{-- ===================== FEATURE HIGHLIGHTS ===================== --}}
<section class="py-16 bg-background-light dark:bg-background-dark">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-6 md:grid-cols-3">

            @foreach([
                [
                    'icon'  => 'lan',
                    'title' => 'Infrastruktur & Jaringan',
                    'desc'  => 'Perancangan dan implementasi topologi jaringan yang aman, stabil, dan scalable untuk kebutuhan enterprise.',
                ],
                [
                    'icon'  => 'terminal',
                    'title' => 'Software Development',
                    'desc'  => 'Pengembangan aplikasi web dan mobile kustom yang disesuaikan dengan proses bisnis unik perusahaan Anda.',
                ],
                [
                    'icon'  => 'security',
                    'title' => 'IT Security Audit',
                    'desc'  => 'Layanan audit keamanan sistem untuk memastikan data dan aset digital Anda terlindungi dari ancaman siber.',
                ],
            ] as $feature)
            <div class="p-6 transition-all duration-300 border rounded-xl group bg-white dark:bg-[#15232b] border-slate-200 dark:border-slate-800 hover:border-primary/50 hover:shadow-xl hover:shadow-primary/5 hover:-translate-y-1">
                <div class="flex items-center justify-center mb-4 transition-colors rounded-lg size-12 bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white">
                    <span class="text-3xl material-symbols-outlined">{{ $feature['icon'] }}</span>
                </div>
                <h3 class="mb-2 text-xl font-bold text-slate-900 dark:text-white">{{ $feature['title'] }}</h3>
                <p class="text-sm leading-relaxed text-slate-500 dark:text-slate-400">{{ $feature['desc'] }}</p>
            </div>
            @endforeach

        </div>
    </div>
</section>

{{-- ===================== CTA STRIP ===================== --}}
<section class="py-16 bg-white dark:bg-[#0d1a20]">
    <div class="max-w-3xl px-4 mx-auto text-center sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-slate-900 dark:text-white">
            Siap Mengembangkan Bisnis Anda?
        </h2>
        <p class="mt-4 text-slate-500 dark:text-slate-400">
            Hubungi tim Andita untuk solusi yang tepat &amp; terukur.
        </p>
        <a href="{{ route('kontak') }}"
           class="inline-flex items-center gap-2 px-10 py-3 mt-8 font-bold text-white transition rounded-lg shadow-lg bg-primary hover:bg-primary-dark shadow-primary/25">
            Hubungi Kami
            <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
        </a>
    </div>
</section>

@endsection