{{-- resources/views/pages/layanan.blade.php --}}
@extends('layouts.app')
@section('title', 'Layanan — Andita IT Integrator')
@section('meta_description', 'Infrastruktur IT, Jaringan Fiber Optik, dan Pengembangan Apliksi Mobile')

@section('content')

{{-- ===================== PAGE HEADER ===================== --}}
<section class="relative pt-16 overflow-hidden pb-14">
    <div class="absolute inset-0 bg-gradient-to-br from-slate-100 to-white dark:from-[#0b1216] dark:to-background-dark -z-10"></div>
    <div class="absolute top-0 right-0 w-1/2 h-full bg-primary/5 blur-[120px] rounded-full -z-10"></div>

    <div class="px-4 mx-auto text-center max-w-7xl sm:px-6 lg:px-10">
        <span class="inline-flex items-center px-3 py-1 mb-5 text-sm font-medium rounded-full bg-primary/10 text-primary ring-1 ring-primary/20">
            Layanan Unggulan
        </span>
        <h1 class="mb-4 text-4xl font-black leading-tight tracking-tight sm:text-5xl text-slate-900 dark:text-slate-100">
            Solusi IT Terintegrasi
            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-primary to-cyan-400">
                untuk Pertumbuhan Bisnis
            </span>
        </h1>
        <p class="max-w-2xl mx-auto text-lg leading-relaxed text-slate-500 dark:text-slate-400">
            Andita hadir menyediakan infrastruktur digital yang handal, aman, dan efisien.
            Fokus pada bisnis Anda, biarkan kami menangani teknologinya.
        </p>
    </div>
</section>

{{-- ===================== SERVICE CARDS ===================== --}}
<section class="py-16 bg-white dark:bg-[#0d1a20]">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-10">
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">

            @foreach([
                [
                    'icon'    => 'server',
                    'title'   => 'Penyediaan Perangkat IT',
                    'desc'    => 'Solusi server, storage, dan perangkat keras handal yang dirancang untuk menjadi fondasi digital kokoh bagi operasional perusahaan Anda.',
                    'anchor'  => '#infrastruktur',
                ],
                [
                    'icon'    => 'network',
                    'title'   => 'Jaringan Fiber Optik / LAN',
                    'desc'    => 'Instalasi jaringan kabel dan nirkabel berkecepatan tinggi yang stabil dan aman, memastikan konektivitas tanpa henti.',
                    'anchor'  => '#jaringan',
                ],
                [
                    'icon'    => 'smartphone',
                    'title'   => 'Pengembangan Aplikasi Mobile',
                    'desc'    => 'Pembuatan aplikasi dan software kustom (Custom Development) yang disesuaikan dengan kebutuhan unik alur kerja bisnis Anda.',
                    'anchor'  => '#software',
                ],
               
            ] as $svc)
            <div id="{{ ltrim($svc['anchor'], '#') }}"
                 class="group flex flex-col gap-5 p-8 rounded-xl bg-background-light dark:bg-[#15232b] border border-slate-200 dark:border-slate-800 hover:border-primary/50 hover:shadow-xl hover:shadow-primary/5 transition-all duration-300 hover:-translate-y-1">
                <div class="flex items-center justify-center transition-colors h-14 w-14 rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white">
                    <i data-lucide="{{ $svc['icon'] }}" class="w-7 h-7"></i>
                </div>
                <div class="flex-1">
                    <h3 class="mb-2 text-lg font-bold text-slate-900 dark:text-white">{{ $svc['title'] }}</h3>
                    <p class="text-sm leading-relaxed text-slate-500 dark:text-slate-400">{{ $svc['desc'] }}</p>
                </div>
                <a href="{{ route('kontak') }}"
                   class="inline-flex items-center gap-1 mt-auto text-sm font-bold transition-all text-primary hover:gap-2">
                    Diskusikan Kebutuhan
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>



{{-- ===================== TECH STACK ===================== --}}
<section class="py-16 bg-white dark:bg-[#0d1a20]">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-10">
        <div class="mb-12 text-center">
            <h2 class="mb-3 text-2xl font-black tracking-tight sm:text-3xl text-slate-900 dark:text-white">
                Stack Teknologi
            </h2>
            <p class="text-slate-500 dark:text-slate-400">Platform dan tools yang kami gunakan</p>
        </div>
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
            @foreach([
                [
                    'icon'  => 'code-2',
                    'title' => 'Backend & Frontend',
                    'items' => 'Laravel, Node.js, Vue.js, React',
                ],
                [
                    'icon'  => 'monitor-smartphone',
                    'title' => 'Operating System',
                    'items' => 'iOS & Android',
                ],
                [
                    'icon'  => 'network',
                    'title' => 'Cable & Fiber Optic',
                    'items' => 'Outdoor, Highrise Building, Campus, Office',
                ],
            ] as $stack)
            <div class="p-6 rounded-xl bg-background-light dark:bg-[#15232b] border border-slate-200 dark:border-slate-800 text-center">
                <i data-lucide="{{ $stack['icon'] }}" class="mx-auto w-9 h-9 text-primary"></i>
                <h4 class="mt-3 mb-1 font-bold text-slate-900 dark:text-white">{{ $stack['title'] }}</h4>
                <p class="text-sm text-slate-500 dark:text-slate-400">{{ $stack['items'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===================== CONSULTATION CTA ===================== --}}
<section class="py-16 bg-background-light dark:bg-background-dark">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-10">
        <div class="rounded-2xl bg-slate-100 dark:bg-[#152026] border border-slate-200 dark:border-slate-800 p-8 sm:p-12 flex flex-col sm:flex-row items-center justify-between gap-8">
            <div class="flex flex-col max-w-xl gap-2 text-center sm:text-left">
                <h4 class="text-xl font-bold text-slate-900 dark:text-white">Butuh konsultasi teknis?</h4>
                <p class="text-sm text-slate-500 dark:text-slate-400">
                    Kami siap membantu Anda menemukan solusi yang tepat untuk pencapaian tujuan perusahaan Anda.
                </p>
            </div>
            <a href="{{ route('kontak') }}"
               class="flex items-center gap-2 text-sm font-bold text-white transition-all border-2 rounded-lg shadow-lg shrink-0 bg-primary hover:bg-primary-dark border-primary h-11 px-7 shadow-primary/25 whitespace-nowrap">
                Hubungi Kami
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>
        </div>
    </div>
</section>

@endsection