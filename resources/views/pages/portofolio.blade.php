{{-- resources/views/pages/portofolio.blade.php --}}
@extends('layouts.app')
@section('title', 'Portofolio — Andita IT Integrator')
@section('meta_description', 'Proyek-proyek unggulan Andita IT — dari jaringan fiber optik hingga implementasi data center.')

@section('content')

{{-- ===================== PAGE HEADER ===================== --}}
<section class="relative pt-16 pb-14 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-slate-100 to-white dark:from-[#0b1216] dark:to-background-dark -z-10"></div>
    <div class="absolute top-0 left-0 w-1/2 h-full bg-primary/5 blur-[120px] rounded-full -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
        <div class="flex items-center gap-2 text-primary font-medium text-sm uppercase tracking-wider mb-4">
            <span class="w-8 h-0.5 bg-primary"></span>
            Our Works
        </div>
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6">
            <div>
                <h1 class="text-4xl sm:text-5xl font-black tracking-tight text-slate-900 dark:text-white leading-[1.1] mb-4">
                    Key Projects &amp;<br class="hidden sm:block"/> Case Studies
                </h1>
                <p class="max-w-2xl text-lg text-slate-500 dark:text-slate-400 leading-relaxed">
                    Telusuri rekam jejak implementasi infrastruktur IT kami — dari jaringan fiber optik
                    metropolitan hingga data center yang aman dan efisien.
                </p>
            </div>
            <a href="{{ route('kontak') }}"
               class="shrink-0 flex items-center gap-2 bg-primary hover:bg-primary-dark text-white font-bold h-11 px-6 rounded-lg transition-all shadow-lg shadow-primary/25 text-sm w-fit">
                Start a Project
                <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
            </a>
        </div>
    </div>
</section>

{{-- ===================== FILTER TABS ===================== --}}
<section class="bg-white dark:bg-[#0d1a20] border-b border-slate-200 dark:border-slate-800 sticky top-16 z-40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 py-3">
        <div class="flex gap-2 overflow-x-auto scrollbar-hide pb-1" id="filter-tabs">
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
                           {{ $loop->first ? 'bg-primary text-white' : 'bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700' }}">
                {{ $tab['label'] }}
            </button>
            @endforeach
        </div>
    </div>
</section>

{{-- ===================== PROJECT GRID ===================== --}}
<section class="py-16 bg-background-light dark:bg-background-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8" id="project-grid">

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
                <div class="relative h-56 sm:h-64 overflow-hidden">
                    <img src="{{ $project['image'] }}"
                         alt="{{ $project['title'] }}"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                         loading="lazy"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>

                    {{-- Tags --}}
                    <div class="absolute top-4 left-4 flex flex-wrap gap-2">
                        @foreach($project['tags'] as $tag)
                        <span class="px-3 py-1 bg-background-dark/80 backdrop-blur-md text-primary text-xs font-bold rounded-full uppercase tracking-wide border border-primary/20">
                            {{ $tag['label'] }}
                        </span>
                        @endforeach
                    </div>
                </div>

                {{-- Content --}}
                <div class="flex flex-col flex-1 p-6 gap-3">
                    <h3 class="text-slate-900 dark:text-white text-lg font-bold leading-tight group-hover:text-primary transition-colors">
                        {{ $project['title'] }}
                    </h3>
                    <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed flex-1">
                        {{ $project['desc'] }}
                    </p>
                    <div class="flex items-center justify-between pt-4 border-t border-slate-100 dark:border-slate-800 mt-auto">
                        <span class="text-xs text-slate-400 flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">calendar_month</span>
                            {{ $project['year'] }}
                        </span>
                        <a href="{{ route('kontak') }}"
                           class="flex items-center gap-1 text-primary text-sm font-bold hover:gap-2 transition-all">
                            Lihat Detail
                            <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
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
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
        <div class="rounded-2xl bg-gradient-to-r from-[#1c2327] to-[#161c20] border border-slate-200 dark:border-[#283339] p-8 sm:p-12 flex flex-col sm:flex-row items-center justify-between gap-8 shadow-lg">
            <div class="flex flex-col gap-2 max-w-xl text-center sm:text-left">
                <h3 class="text-white text-2xl font-bold">Punya proyek serupa?</h3>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Tim insinyur kami siap membantu Anda merancang dan mengimplementasikan infrastruktur yang tepat sesuai kebutuhan.
                </p>
            </div>
            <a href="{{ route('kontak') }}"
               class="shrink-0 flex items-center gap-2 bg-primary hover:bg-primary-dark text-white font-bold h-12 px-8 rounded-lg transition-all shadow-lg shadow-primary/25 whitespace-nowrap text-sm">
                Start a Project
                <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
            </a>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
function filterProjects(filter) {
    // Update active tab
    document.querySelectorAll('.filter-btn').forEach(btn => {
        const isActive = btn.dataset.filter === filter;
        btn.classList.toggle('bg-primary',     isActive);
        btn.classList.toggle('text-white',     isActive);
        btn.classList.toggle('bg-slate-100',   !isActive);
        btn.classList.toggle('dark:bg-slate-800', !isActive);
        btn.classList.toggle('text-slate-600', !isActive);
        btn.classList.toggle('dark:text-slate-300', !isActive);
    });

    // Filter cards
    document.querySelectorAll('.project-card').forEach(card => {
        const show = filter === 'all' || card.dataset.filter === filter;
        card.style.opacity    = show ? '1' : '0.3';
        card.style.transform  = show ? '' : 'scale(0.97)';
        card.style.pointerEvents = show ? '' : 'none';
    });
}
</script>
@endpush
