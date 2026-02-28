{{-- resources/views/pages/layanan.blade.php --}}
@extends('layouts.app')
@section('title', 'Layanan — Andita IT Integrator')
@section('meta_description', 'Infrastruktur IT, Jaringan Fiber Optik, dan Pengembangan Sistem dari tim ahli Andita.')

@section('content')

{{-- ===================== PAGE HEADER ===================== --}}
<section class="relative pt-16 pb-14 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-slate-100 to-white dark:from-[#0b1216] dark:to-background-dark -z-10"></div>
    <div class="absolute top-0 right-0 w-1/2 h-full bg-primary/5 blur-[120px] rounded-full -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 text-center">
        <span class="inline-flex items-center px-3 py-1 rounded-full bg-primary/10 text-primary text-sm font-medium ring-1 ring-primary/20 mb-5">
            Layanan Unggulan
        </span>
        <h1 class="text-4xl sm:text-5xl font-black tracking-tight text-slate-900 dark:text-slate-100 leading-tight mb-4">
            Solusi IT Terintegrasi
            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-primary to-cyan-400">
                untuk Pertumbuhan Bisnis
            </span>
        </h1>
        <p class="max-w-2xl mx-auto text-lg text-slate-500 dark:text-slate-400 leading-relaxed">
            Andita hadir menyediakan infrastruktur digital yang handal, aman, dan efisien.
            Fokus pada bisnis Anda, biarkan kami menangani teknologinya.
        </p>
    </div>
</section>

{{-- ===================== SERVICE CARDS ===================== --}}
<section class="py-16 bg-white dark:bg-[#0d1a20]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach([
                [
                    'icon'    => 'dns',
                    'title'   => 'Penyediaan Infrastruktur IT',
                    'desc'    => 'Solusi server, storage, dan perangkat keras handal yang dirancang untuk menjadi fondasi digital kokoh bagi operasional perusahaan Anda.',
                    'anchor'  => '#infrastruktur',
                ],
                [
                    'icon'    => 'router',
                    'title'   => 'Jaringan Fiber Optik / LAN',
                    'desc'    => 'Instalasi jaringan kabel dan nirkabel berkecepatan tinggi yang stabil dan aman, memastikan konektivitas tanpa henti.',
                    'anchor'  => '#jaringan',
                ],
                [
                    'icon'    => 'code',
                    'title'   => 'Pengembangan Sistem',
                    'desc'    => 'Pembuatan aplikasi dan software kustom (Custom Development) yang disesuaikan dengan kebutuhan unik alur kerja bisnis Anda.',
                    'anchor'  => '#software',
                ],
                [
                    'icon'    => 'security',
                    'title'   => 'IT Security Audit',
                    'desc'    => 'Layanan audit keamanan sistem menyeluruh untuk memastikan data dan aset digital Anda terlindungi dari ancaman siber.',
                    'anchor'  => '#security',
                ],
                [
                    'icon'    => 'cloud',
                    'title'   => 'Cloud & DevOps',
                    'desc'    => 'Migrasi dan pengelolaan cloud infrastructure, CI/CD pipeline, serta containerisasi untuk deployment yang efisien.',
                    'anchor'  => '#devops',
                ],
                [
                    'icon'    => 'support_agent',
                    'title'   => 'Konsultasi & Dukungan',
                    'desc'    => 'Tim ahli kami siap memberikan konsultasi teknis dan dukungan purna jual 24/7 untuk kelancaran operasional bisnis Anda.',
                    'anchor'  => '#konsultasi',
                ],
            ] as $svc)
            <div id="{{ ltrim($svc['anchor'], '#') }}"
                 class="group flex flex-col gap-5 p-8 rounded-xl bg-background-light dark:bg-[#15232b] border border-slate-200 dark:border-slate-800 hover:border-primary/50 hover:shadow-xl hover:shadow-primary/5 transition-all duration-300 hover:-translate-y-1">
                <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-[30px]">{{ $svc['icon'] }}</span>
                </div>
                <div class="flex-1">
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">{{ $svc['title'] }}</h3>
                    <p class="text-sm text-slate-500 dark:text-slate-400 leading-relaxed">{{ $svc['desc'] }}</p>
                </div>
                <a href="{{ route('kontak') }}"
                   class="inline-flex items-center gap-1 text-sm font-bold text-primary hover:gap-2 transition-all mt-auto">
                    Diskusikan Kebutuhan
                    <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===================== INFRASTRUKTUR DETAIL ===================== --}}
<section class="py-20 bg-background-light dark:bg-background-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
        <div class="grid items-center gap-12 lg:grid-cols-2">

            <div class="flex flex-col gap-6 order-2 lg:order-1">
                <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-primary/10 text-primary">
                    <span class="material-symbols-outlined text-[32px]">dns</span>
                </div>
                <h2 class="text-3xl font-black text-slate-900 dark:text-white tracking-tight">
                    Penyediaan Infrastruktur IT
                </h2>
                <p class="text-slate-500 dark:text-slate-400 leading-relaxed text-lg">
                    Kami merancang dan mengimplementasikan infrastruktur IT yang kokoh —
                    mulai dari server, storage, hingga perangkat keras pendukung bisnis Anda.
                </p>
                <ul class="space-y-3">
                    @foreach([
                        'Server & Storage Enterprise',
                        'Rack & Power Management',
                        'Network Switching & Routing',
                        'UPS & Disaster Recovery',
                    ] as $item)
                    <li class="flex items-center gap-3 text-slate-700 dark:text-slate-300">
                        <span class="flex items-center justify-center w-6 h-6 rounded-full bg-primary/10 text-primary shrink-0">
                            <span class="material-symbols-outlined text-[14px]">check</span>
                        </span>
                        <span class="text-sm">{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('kontak') }}"
                   class="inline-flex items-center gap-2 bg-primary hover:bg-primary-dark text-white font-bold h-11 px-6 rounded-lg transition-all w-fit shadow-lg shadow-primary/25 text-sm">
                    Konsultasi Sekarang
                    <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                </a>
            </div>

            <div class="order-1 lg:order-2 p-8 rounded-2xl bg-white dark:bg-[#15232b] border border-slate-200 dark:border-slate-800">
                <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-6">Mengapa Memilih Kami?</h3>
                <div class="space-y-5">
                    @foreach([
                        ['icon' => 'speed',    'title' => 'Performa Tinggi',    'desc' => 'Hardware enterprise-grade dengan SLA uptime 99.9%.'],
                        ['icon' => 'devices',  'title' => 'Skalabel',           'desc' => 'Infrastruktur yang mudah dikembangkan seiring pertumbuhan bisnis.'],
                        ['icon' => 'security', 'title' => 'Keamanan Terjamin',  'desc' => 'Proteksi berlapis dari akses tidak sah dan ancaman fisik.'],
                    ] as $feat)
                    <div class="flex items-start gap-4">
                        <span class="flex items-center justify-center w-10 h-10 rounded-lg bg-primary/10 text-primary shrink-0">
                            <span class="material-symbols-outlined text-[20px]">{{ $feat['icon'] }}</span>
                        </span>
                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white text-sm">{{ $feat['title'] }}</h4>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">{{ $feat['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ===================== TECH STACK ===================== --}}
<section class="py-16 bg-white dark:bg-[#0d1a20]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
        <div class="text-center mb-12">
            <h2 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white tracking-tight mb-3">
                Stack Teknologi
            </h2>
            <p class="text-slate-500 dark:text-slate-400">Platform dan tools yang kami gunakan</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            @foreach([
                [
                    'icon'  => 'code',
                    'title' => 'Backend & Frontend',
                    'items' => 'Laravel, Node.js, Vue.js, React',
                ],
                [
                    'icon'  => 'storage',
                    'title' => 'Database',
                    'items' => 'MySQL, PostgreSQL, MongoDB, Redis',
                ],
                [
                    'icon'  => 'cloud',
                    'title' => 'Cloud & DevOps',
                    'items' => 'AWS, GCP, Docker, GitHub Actions',
                ],
            ] as $stack)
            <div class="p-6 rounded-xl bg-background-light dark:bg-[#15232b] border border-slate-200 dark:border-slate-800 text-center">
                <span class="material-symbols-outlined text-primary text-[36px]">{{ $stack['icon'] }}</span>
                <h4 class="font-bold text-slate-900 dark:text-white mt-3 mb-1">{{ $stack['title'] }}</h4>
                <p class="text-sm text-slate-500 dark:text-slate-400">{{ $stack['items'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===================== CONSULTATION CTA ===================== --}}
<section class="py-16 bg-background-light dark:bg-background-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
        <div class="rounded-2xl bg-slate-100 dark:bg-[#152026] border border-slate-200 dark:border-slate-800 p-8 sm:p-12 flex flex-col sm:flex-row items-center justify-between gap-8">
            <div class="flex flex-col gap-2 max-w-xl text-center sm:text-left">
                <h4 class="text-xl font-bold text-slate-900 dark:text-white">Butuh konsultasi teknis?</h4>
                <p class="text-slate-500 dark:text-slate-400 text-sm">
                    Tim ahli kami siap membantu Anda menemukan solusi yang tepat untuk infrastruktur IT perusahaan Anda.
                </p>
            </div>
            <a href="{{ route('kontak') }}"
               class="shrink-0 flex items-center gap-2 bg-primary hover:bg-primary-dark border-2 border-primary text-white font-bold h-11 px-7 rounded-lg transition-all text-sm shadow-lg shadow-primary/25 whitespace-nowrap">
                Hubungi Kami
                <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
            </a>
        </div>
    </div>
</section>

@endsection
