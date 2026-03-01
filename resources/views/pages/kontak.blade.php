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
            Kami siap membantu kebutuhan integrasi IT Anda. Tim ahli kami berdedikasi untuk memberikan
            solusi terbaik bagi pertumbuhan bisnis Anda.
        </p>
    </div>
</section>

{{-- ===================== CONTACT INFO CARDS ===================== --}}
<section class="py-10 bg-white dark:bg-[#0d1a20]">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-10">
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-3">
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
                    'lines' => ['+62 21 5555 8888', 'Senin–Jumat, 09.00–17.00 WIB'],
                    'href'  => 'tel:+622155558888',
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
                <div>
                    <h3 class="mb-1 text-sm font-bold text-slate-900 dark:text-white">{{ $info['title'] }}</h3>
                    @foreach($info['lines'] as $line)
                    <p class="text-sm text-slate-500 dark:text-slate-400">{{ $line }}</p>
                    @endforeach
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ===================== FORM + MAP ===================== --}}
<section class="py-16 bg-background-light dark:bg-background-dark">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-10">
        <div class="grid gap-10 lg:grid-cols-2">

            {{-- Contact Form --}}
            <div class="bg-white dark:bg-[#15232b] p-7 sm:p-10 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-xl dark:shadow-none">
                <h2 class="flex items-center gap-2 text-xl font-bold text-slate-900 dark:text-white mb-7">
                    <span class="material-symbols-outlined text-primary">mail</span>
                    Kirim Pesan
                </h2>

                <form method="POST" action="{{ route('kontak.send') }}" class="flex flex-col gap-5" id="contact-form">
                    @csrf

                    {{-- Nama + Email --}}
                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                        <div class="flex flex-col gap-1.5">
                            <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Nama Lengkap</label>
                            <input type="text"
                                   name="name"
                                   placeholder="John Doe"
                                   required
                                   class="w-full rounded-lg bg-slate-50 dark:bg-[#1c2a33] border border-slate-200 dark:border-slate-700
                                          focus:border-primary focus:ring-1 focus:ring-primary
                                          text-slate-900 dark:text-white placeholder:text-slate-400 px-4 py-3 text-sm transition-colors outline-none"/>
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Alamat Email</label>
                            <input type="email"
                                   name="email"
                                   placeholder="email@perusahaan.com"
                                   required
                                   class="w-full rounded-lg bg-slate-50 dark:bg-[#1c2a33] border border-slate-200 dark:border-slate-700
                                          focus:border-primary focus:ring-1 focus:ring-primary
                                          text-slate-900 dark:text-white placeholder:text-slate-400 px-4 py-3 text-sm transition-colors outline-none"/>
                        </div>
                    </div>

                    {{-- Subjek --}}
                    <div class="flex flex-col gap-1.5">
                        <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Subjek</label>
                        <select name="subject"
                                class="w-full rounded-lg bg-slate-50 dark:bg-[#1c2a33] border border-slate-200 dark:border-slate-700
                                       focus:border-primary focus:ring-1 focus:ring-primary
                                       text-slate-900 dark:text-white px-4 py-3 text-sm transition-colors outline-none">
                            <option value="integrasi">Kebutuhan Integrasi Sistem</option>
                            <option value="konsultasi">Konsultasi IT</option>
                            <option value="dukungan">Dukungan Teknis</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>

                    {{-- Pesan --}}
                    <div class="flex flex-col gap-1.5">
                        <label class="text-sm font-medium text-slate-700 dark:text-slate-300">Pesan</label>
                        <textarea name="message"
                                  rows="5"
                                  placeholder="Ceritakan kebutuhan Anda..."
                                  required
                                  class="w-full rounded-lg bg-slate-50 dark:bg-[#1c2a33] border border-slate-200 dark:border-slate-700
                                         focus:border-primary focus:ring-1 focus:ring-primary
                                         text-slate-900 dark:text-white placeholder:text-slate-400 px-4 py-3 text-sm transition-colors outline-none resize-none"></textarea>
                    </div>

                    {{-- Turnstile Captcha --}}
                    <div class="cf-turnstile" data-sitekey="{{ config('services.turnstile.key') }}"></div>

                    {{-- Submit --}}
                    <button type="submit"
                            class="flex items-center justify-center w-full h-12 gap-2 mt-1 text-sm font-bold text-white transition-all rounded-lg shadow-lg bg-primary hover:bg-primary-dark shadow-primary/25 group">
                        Kirim Pesan Sekarang
                        <span class="material-symbols-outlined text-[18px] transition-transform group-hover:translate-x-1">send</span>
                    </button>

                    {{-- Success / Error Messages --}}
                    @if (session('success'))
                    <div class="flex items-center gap-2 p-4 text-sm text-green-700 border border-green-200 rounded-lg bg-green-50 dark:bg-green-900/20 dark:border-green-800 dark:text-green-400">
                        <span class="material-symbols-outlined text-[18px]">check_circle</span>
                        {{ session('success') }}
                    </div>
                    @endif

                    @if ($errors->any())
                    <div class="flex items-start gap-2 p-4 text-sm text-red-700 border border-red-200 rounded-lg bg-red-50 dark:bg-red-900/20 dark:border-red-800 dark:text-red-400">
                        <span class="material-symbols-outlined text-[18px] shrink-0 mt-0.5">error</span>
                        <div>
                            @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </form>
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