{{-- resources/views/pages/kontak.blade.php --}}
@extends('layouts.app')
@section('title', 'Kontak — Andita IT Integrator')
@section('meta_description', 'Hubungi tim Andita IT untuk konsultasi infrastruktur, jaringan, dan pengembangan sistem Anda.')

@section('content')

{{-- ===================== PAGE HEADER ===================== --}}
<section class="relative pt-16 overflow-hidden pb-14">
    <div class="absolute inset-0 bg-gradient-to-br from-slate-100 to-white dark:from-[#0b1216] dark:to-background-dark -z-10"></div>
    <div class="absolute top-0 right-0 w-1/2 h-full bg-primary/5 blur-[120px] rounded-full -z-10"></div>

    <div class="px-4 mx-auto text-center max-w-7xl sm:px-6 lg:px-10">
        <h1 class="mb-4 text-4xl font-black leading-tight tracking-tight sm:text-5xl lg:text-6xl text-slate-900 dark:text-white">
            Hubungi <span class="text-primary">Kami</span>
        </h1>
        <p class="max-w-2xl mx-auto text-lg leading-relaxed text-slate-500 dark:text-slate-400">
            Kami siap diskusi untuk pertumbuhan bisnis Anda
        </p>
    </div>
</section>



{{-- ===================== FORM + MAP ===================== --}}
<section class="py-16 bg-background-light dark:bg-background-dark">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-10">
        <div class="grid gap-10 lg:grid-cols-2">

            {{-- Contact Form --}}
            <div class="bg-white dark:bg-[#15232b] p-7 sm:p-10 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-xl dark:shadow-none">
                
                <div class="flex flex-col gap-5">
            @foreach([
                [
                    'icon'  => '',
                    'title' => 'Kantor Pusat',
                    'lines' => ['Yogyakarta', 'Indonesia'],
                    'href'  => '#',
                ],
                [
                    'icon'  => '',
                    'title' => 'Telepon',
                    'lines' => ['+62 817-4127-621', 'Senin–Jumat, 09.00–17.00 WIB'],
                    'href'  => 'tel:+62 817-4127-621',
                ],
                [
                    'icon'  => '',
                    'title' => 'Email',
                    'lines' => ['info@andita.co.id', 'support@andita.co.id'],
                    'href'  => 'mailto:info@andita.co.id',
                ],
            ] as $info)
            <a href="{{ $info['href'] }}"
               class="group flex items-start gap-4 p-6 rounded-xl bg-background-light dark:bg-[#15232b] border border-slate-200 dark:border-slate-800 hover:border-primary/50 transition-all hover:shadow-lg hover:shadow-primary/5">
                <div class="flex items-center justify-center w-12 h-12 transition-colors rounded-full bg-primary/10 text-primary shrink-0 group-hover:bg-primary group-hover:text-white">
                    <span class="material-symbols-outlined text-[22px]">{{ $info['icon'] }}</span>
                </div>
                <div class="">
                    <h3 class="p-0 mb-1 text-sm font-bold text-slate-900 dark:text-white">{{ $info['title'] }}</h3>
                    @foreach($info['lines'] as $line)
                    <p class="text-sm text-slate-500 dark:text-slate-400">{{ $line }}</p>
                    @endforeach
                </div>
            </a>
            @endforeach
        </div>
                

                
            </div>

            {{-- Map + Extra Info --}}
            <div class="flex flex-col gap-6">

                {{-- Map --}}
                <div class="rounded-2xl overflow-hidden border border-slate-200 dark:border-slate-800 shadow-lg flex-1 min-h-[280px]">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126390.52883906208!2d110.29504175!3d-7.79558785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5734a9a81fb5%3A0x24b1ba6a7b4c4cad!2sYogyakarta!5e0!3m2!1sen!2sid!4v1700000000000"
                        width="100%"
                        height="100%"
                        style="border:0; min-height: 280px;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Lokasi Andita IT Yogyakarta">
                    </iframe>
                </div>

                {{-- Business Hours --}}
                <div class="p-6 rounded-2xl bg-white dark:bg-[#15232b] border border-slate-200 dark:border-slate-800">
                    <h3 class="flex items-center gap-2 mb-4 text-sm font-bold text-slate-900 dark:text-white">
                        <span class="material-symbols-outlined text-primary text-[18px]">schedule</span>
                        Jam Operasional
                    </h3>
                    <div class="space-y-2">
                        @foreach([
                            ['day' => 'Senin – Jumat',  'hours' => '09:00 – 17:00 WIB', 'open' => true],
                            ['day' => 'Sabtu',           'hours' => '09:00 – 13:00 WIB', 'open' => true],
                            ['day' => 'Minggu',          'hours' => 'Tutup',              'open' => false],
                        ] as $schedule)
                        <div class="flex items-center justify-between py-2 border-b border-slate-100 dark:border-slate-800 last:border-0">
                            <span class="text-sm text-slate-600 dark:text-slate-300">{{ $schedule['day'] }}</span>
                            <span class="text-sm font-medium {{ $schedule['open'] ? 'text-primary' : 'text-slate-400' }}">
                                {{ $schedule['hours'] }}
                            </span>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- Turnstile Script --}}
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

@endsection