@extends('layouts.app')

@section('title', 'Andita - IT Integrator')

@section('content')

{{-- HERO SECTION --}}
<section class="py-24 bg-white">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

        <div class="grid items-center gap-12 lg:grid-cols-2">

            {{-- TEXT --}}
            <div class="text-center lg:text-left">
                <h1 class="text-3xl font-extrabold leading-tight sm:text-5xl lg:text-6xl text-slate-900">
                    Solusi Bisnis Anda,
                    <span class="block text-blue-700">
                        Prioritas Kami
                    </span>
                </h1>

                <p class="max-w-xl mx-auto mt-6 text-lg text-slate-600 lg:mx-0">
                    Menyiapkan infrastruktur, perangkat keras dan implementasi LAN / Fiber Optic untuk
                    mendukung pertumbuhan bisnis Anda.
                </p>

                <div class="flex flex-col justify-center gap-4 mt-8 sm:flex-row lg:justify-start">
                    <a href="{{ route('kontak') }}"
                       class="px-8 py-3 font-semibold text-white transition bg-blue-700 rounded-lg hover:bg-blue-800">
                        Konsultasikan segera 
                    </a>

                    <a href="{{ route('layanan') }}"
                       class="px-8 py-3 font-semibold transition border rounded-lg border-slate-300 hover:bg-slate-50">
                        Layanan
                    </a>
                </div>
            </div>

            {{-- IMAGE --}}
            <div class="overflow-hidden shadow-lg rounded-xl">
                <img src="{{ asset('images/dcandita.png') }}"
                     alt="Andita IT Integrator"
                     class="object-cover w-full h-auto">
            </div>

        </div>

    </div>
</section>


{{-- SERVICES SECTION --}}
<section class="py-20 bg-slate-50">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

        <div class="max-w-2xl mx-auto mb-16 text-center">
            <h2 class="text-3xl font-bold text-slate-900">
                Layanan Profesional
            </h2>
            <p class="mt-4 text-slate-600">
                Solusi digital terintegrasi untuk kebutuhan bisnis modern.
            </p>
        </div>

        <div class="grid gap-8 md:grid-cols-3">

            <div class="p-8 transition bg-white border border-slate-200 rounded-xl hover:shadow-lg">
                <h3 class="mb-3 text-xl font-semibold">Mobile App</h3>
                <p class="text-slate-600">
                    Aplikasi mobile yang untuk meningkatkan pengalaman pelanggan Anda.
                </p>
            </div>

            <div class="p-8 transition bg-white border border-slate-200 rounded-xl hover:shadow-lg">
                <h3 class="mb-3 text-xl font-semibold">Jaringan LAN</h3>
                <p class="text-slate-600">
                    Instalasi jaringan pada gedung bertingkat dan kantor.
                </p>
            </div>

            <div class="p-8 transition bg-white border border-slate-200 rounded-xl hover:shadow-lg">
                <h3 class="mb-3 text-xl font-semibold">Instalasi Fiber Optic</h3>
                <p class="text-slate-600">
                    Instalasi Fiber Optic untuk kebutuhan konektivitas antar gedung atau jaringan internet cepat dan stabil.
                </p>
            </div>

        </div>

    </div>
</section>


{{-- CTA SECTION --}}
<section class="py-20 bg-white">
    <div class="max-w-3xl px-4 mx-auto text-center sm:px-6 lg:px-8">

        <h2 class="text-3xl font-bold text-slate-900">
            Siap Mengembangkan Bisnis Anda?
        </h2>

        <p class="mt-4 text-slate-600">
            Hubungi tim Andita untuk solusi yang tepat & terukur.
        </p>

        <a href="{{ route('kontak') }}"
           class="inline-block px-10 py-3 mt-8 font-semibold text-white transition bg-blue-700 rounded-lg hover:bg-blue-800">
            Hubungi Kami
        </a>

    </div>
</section>

@endsection