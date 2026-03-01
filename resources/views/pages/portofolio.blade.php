{{-- resources/views/pages/portofolio.blade.php --}}
@extends('layouts.app')
@section('title', 'Portofolio — Andita IT Integrator')
@section('meta_description', 'Proyek-proyek unggulan Andita IT — dari jaringan fiber optik hingga implementasi data center.')

@section('content')

{{-- ===================== PAGE HEADER ===================== --}}
<section class="relative pt-16 overflow-hidden pb-14">
    <div class="absolute inset-0 bg-gradient-to-br from-slate-100 to-white dark:from-[#0b1216] dark:to-background-dark -z-10"></div>
    <div class="absolute top-0 left-0 w-1/2 h-full bg-primary/5 blur-[120px] rounded-full -z-10"></div>

    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-10">
        <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
            <div>
                <h1 class="text-4xl sm:text-5xl font-black tracking-tight text-slate-900 dark:text-white leading-[1.1] mb-4">
                    Portofolio 
                </h1>
                <p class="max-w-2xl text-lg leading-relaxed text-slate-500 dark:text-slate-400">
                    Telusuri rekam jejak aktivitas kami.
                </p>
            </div>
            <a href="{{ route('kontak') }}"
               class="flex items-center gap-2 px-6 text-sm font-bold text-white transition-all rounded-lg shadow-lg shrink-0 bg-primary hover:bg-primary-dark h-11 shadow-primary/25 w-fit">
                Start a Project
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</section>

{{-- ===================== FILTER TABS ===================== --}}
<section class="bg-white dark:bg-[#0d1a20] border-b border-slate-200 dark:border-slate-800 sticky top-16 z-40">
    <div class="px-4 py-3 mx-auto max-w-7xl sm:px-6 lg:px-10">
        <div class="flex gap-2 pb-1 overflow-x-auto scrollbar-hide" id="filter-tabs">
            @foreach([
                ['label' => 'Semua Proyek', 'filter' => 'all'],
                ['label' => 'Infrastructure', 'filter' => 'infrastructure'],
                ['label' => 'Networking',     'filter' => 'networking'],
                ['label' => 'Data Center',    'filter' => 'datacenter'],
                ['label' => 'Software',       'filter' => 'software'],
            ] as $tab)
            <button onclick="filterProjects('{{ $tab['filter'] }}')"
                    data-filter="{{ $tab['filter'] }}"
                    class="filter-btn shrink-0 px-4 py-2 rounded-full text-sm font-medium transition-colors
                           {{ $loop->first ? 'active-filter' : 'inactive-filter' }}">
                {{ $tab['label'] }}
            </button>
            @endforeach
        </div>
    </div>
</section>

{{-- ===================== PROJECT GRID ===================== --}}
<section class="py-16 bg-background-light dark:bg-background-dark">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-10">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2" id="project-grid">

            @php
            $projects = [
                [
                    'image'    => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800&q=80',
                    'tags'     => [['label' => 'Infrastructure', 'filter' => 'infrastructure'], ['label' => 'Metro Area', 'filter' => 'all']],
                    'title'    => 'Instalasi Jalur Backbone Fiber Optik',
                    'desc'     => 'Deployment jaringan backbone berkecepatan tinggi menghubungkan 5 titik kota utama dengan redundant connectivity dan latensi rendah.',
                    'year'     => '2023',
                ],
                [
                    'image'    => 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=800&q=80',
                    'tags'     => [['label' => 'LAN', 'filter' => 'networking'], ['label' => 'Commercial', 'filter' => 'networking']],
                    'title'    => 'Sistem LAN Gedung Bertingkat 10 Lantai',
                    'desc'     => 'Solusi structured cabling, instalasi switch, dan Wi-Fi mapping untuk kantor korporat 10 lantai mendukung 500+ pengguna.',
                    'year'     => '2023',
                ],
                [
                    'image'    => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=800&q=80',
                    'tags'     => [['label' => 'FO', 'filter' => 'networking'], ['label' => 'Engineering', 'filter' => 'infrastructure']],
                    'title'    => 'Pengawasan Penarikan Kabel FO Bawah Tanah',
                    'desc'     => 'Supervisi dan quality control end-to-end untuk proyek penarikan kabel fiber optik bawah tanah sesuai standar sipil.',
                    'year'     => '2022',
                ],
                [
                    'image'    => 'https://images.unsplash.com/photo-1544197150-b99a580bb7a8?w=800&q=80',
                    'tags'     => [['label' => 'Data Center', 'filter' => 'datacenter'], ['label' => 'Startup', 'filter' => 'datacenter']],
                    'title'    => 'Implementasi Data Center Startup',
                    'desc'     => 'Perancangan dan pembangunan micro data center skalabel untuk startup fintech dengan fokus efisiensi pendingin dan redundansi daya.',
                    'year'     => '2024',
                ],
                [
                    'image'    => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=800&q=80',
                    'tags'     => [['label' => 'Software', 'filter' => 'software'], ['label' => 'Enterprise', 'filter' => 'software']],
                    'title'    => 'Sistem Manajemen Aset IT Enterprise',
                    'desc'     => 'Pengembangan aplikasi web kustom untuk manajemen inventaris dan pelacakan aset IT di seluruh cabang perusahaan.',
                    'year'     => '2024',
                ],
                [
                    'image'    => 'https://images.unsplash.com/photo-1562813733-b31f71025d54?w=800&q=80',
                    'tags'     => [['label' => 'Security', 'filter' => 'infrastructure'], ['label' => 'Audit', 'filter' => 'infrastructure']],
                    'title'    => 'IT Security Audit & Hardening',
                    'desc'     => 'Audit keamanan menyeluruh dan penerapan kebijakan hardening untuk melindungi aset digital perusahaan manufaktur berskala besar.',
                    'year'     => '2023',
                ],
            ];
            @endphp

            @foreach($projects as $project)
            <article class="project-card group relative flex flex-col rounded-xl overflow-hidden bg-white dark:bg-[#1c2327] border border-slate-200 dark:border-[#283339] shadow-sm hover:shadow-xl hover:shadow-primary/10 transition-all duration-300 hover:-translate-y-1"
                     data-filter="{{ $project['tags'][0]['filter'] }}">

                {{-- Image --}}
                <div class="relative h-56 overflow-hidden sm:h-64">
                    <img src="{{ $project['image'] }}"
                         alt="{{ $project['title'] }}"
                         class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105"
                         loading="lazy"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>

                    {{-- Tags --}}
                    <div class="absolute flex flex-wrap gap-2 top-4 left-4">
                        @foreach($project['tags'] as $tag)
                        <span class="px-3 py-1 text-xs font-bold tracking-wide uppercase border rounded-full bg-background-dark/80 backdrop-blur-md text-primary border-primary/20">
                            {{ $tag['label'] }}
                        </span>
                        @endforeach
                    </div>
                </div>

                {{-- Content --}}
                <div class="flex flex-col flex-1 gap-3 p-6">
                    <h3 class="text-lg font-bold leading-tight transition-colors text-slate-900 dark:text-white group-hover:text-primary">
                        {{ $project['title'] }}
                    </h3>
                    <p class="flex-1 text-sm leading-relaxed text-slate-500 dark:text-slate-400">
                        {{ $project['desc'] }}
                    </p>
                    <div class="flex items-center justify-between pt-4 mt-auto border-t border-slate-100 dark:border-slate-800">
                        <span class="flex items-center gap-1 text-xs text-slate-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                            {{ $project['year'] }}
                        </span>
                        <a href="{{ route('kontak') }}"
                           class="flex items-center gap-1 text-sm font-bold transition-all group/link text-primary">
                            Lihat Detail
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0 transition-transform group-hover/link:translate-x-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            </article>
            @endforeach

        </div>
    </div>
</section>

{{-- ===================== CTA ===================== --}}
<section class="py-16 bg-white dark:bg-[#0d1a20]">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-10">
        <div class="rounded-2xl bg-gradient-to-r from-[#1c2327] to-[#161c20] border border-slate-200 dark:border-[#283339] p-8 sm:p-12 flex flex-col sm:flex-row items-center justify-between gap-8 shadow-lg">
            <div class="flex flex-col max-w-xl gap-2 text-center sm:text-left">
                <h3 class="text-2xl font-bold text-white">Punya proyek serupa?</h3>
                <p class="text-sm leading-relaxed text-slate-400">
                    Tim kami siap membantu merancang dan implementasi infrastruktur yang tepat.
                </p>
            </div>
            <a href="{{ route('kontak') }}"
               class="flex items-center h-12 gap-2 px-8 text-sm font-bold text-white transition-all rounded-lg shadow-lg shrink-0 bg-primary hover:bg-primary-dark shadow-primary/25 whitespace-nowrap">
                Start a Project
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<style>
    .active-filter {
        background-color: var(--color-primary, #0ea5e9);
        color: #ffffff;
    }
    .inactive-filter {
        background-color: #f1f5f9;
        color: #475569;
    }
    @media (prefers-color-scheme: dark) {
        .inactive-filter {
            background-color: #1e293b;
            color: #cbd5e1;
        }
    }
    .dark .inactive-filter {
        background-color: #1e293b;
        color: #cbd5e1;
    }
    .inactive-filter:hover {
        background-color: #e2e8f0;
    }
    .dark .inactive-filter:hover {
        background-color: #334155;
    }
</style>
<script>
function filterProjects(filter) {
    // Update active tab — replace class names entirely to avoid conflicts
    document.querySelectorAll('.filter-btn').forEach(btn => {
        const isActive = btn.dataset.filter === filter;
        btn.className = btn.className
            .replace(/\b(active-filter|inactive-filter)\b/g, '')
            .trim();
        btn.className += ' ' + (isActive ? 'active-filter' : 'inactive-filter');
    });

    // Show / hide cards with smooth transition
    document.querySelectorAll('.project-card').forEach(card => {
        const show = filter === 'all' || card.dataset.filter === filter;
        card.style.transition    = 'opacity 0.25s ease, transform 0.25s ease';
        card.style.opacity       = show ? '1' : '0.25';
        card.style.transform     = show ? 'scale(1)' : 'scale(0.97)';
        card.style.pointerEvents = show ? '' : 'none';
    });
}
</script>
@endpush