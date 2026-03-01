{{-- resources/views/partials/footer.blade.php --}}
<footer class="bg-slate-100 dark:bg-[#0b1216] border-t border-slate-200 dark:border-slate-800 pt-14 pb-8">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-10">

        {{-- Top Grid --}}
        <div class="grid grid-cols-1 gap-10 mb-12 sm:grid-cols-2 lg:grid-cols-4">

            {{-- Brand --}}
            <div class="sm:col-span-2 lg:col-span-1">
                <a href="{{ route('home') }}" class="flex items-center gap-3 mb-4">
                    <div class="flex items-center justify-center w-8 h-8 rounded-lg bg-primary/10 text-primary">
                        <span class="material-symbols-outlined text-[20px]">dns</span>
                    </div>
                    <span class="text-base font-bold text-slate-900 dark:text-white">Andita IT</span>
                </a>
                <p class="text-sm leading-relaxed text-slate-500 dark:text-slate-400">
                    Solusi integrasi IT terpercaya — infrastruktur handal, jaringan aman, dan pengembangan software terbaik.
                </p>
            </div>

            {{-- Layanan --}}
            <div>
                <h4 class="mb-4 text-sm font-bold tracking-wider uppercase text-slate-900 dark:text-white">Layanan</h4>
                <ul class="space-y-2.5">
                    @foreach([
                        'Infrastruktur IT',
                        'Jaringan Fiber Optik / LAN',
                        'Pengembangan Sistem',
                        'IT Security Audit',
                        'Konsultasi Teknis',
                    ] as $item)
                    <li>
                        <a href="{{ route('layanan') }}"
                           class="text-sm transition-colors text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary">
                            {{ $item }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Perusahaan --}}
            <div>
                <h4 class="mb-4 text-sm font-bold tracking-wider uppercase text-slate-900 dark:text-white">Perusahaan</h4>
                <ul class="space-y-2.5">
                    @foreach([
                        ['label' => 'Beranda',    'route' => 'home'],
                        ['label' => 'Portofolio', 'route' => 'portofolio'],
                        ['label' => 'Kontak',     'route' => 'kontak'],
                    ] as $item)
                    <li>
                        <a href="{{ route($item['route']) }}"
                           class="text-sm transition-colors text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary">
                            {{ $item['label'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Kontak --}}
            <div>
                <h4 class="mb-4 text-sm font-bold tracking-wider uppercase text-slate-900 dark:text-white">Kontak</h4>
                <address class="space-y-3 not-italic">
                    <p class="flex items-start gap-2 text-sm text-slate-500 dark:text-slate-400">
                        <span class="material-symbols-outlined text-primary text-[16px] mt-0.5 shrink-0">location_on</span>
                        Yogyakarta, Indonesia
                    </p>
                    <a href="tel:+622155558888"
                       class="flex items-center gap-2 text-sm transition-colors text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary">
                        <span class="material-symbols-outlined text-primary text-[16px] shrink-0">call</span>
                        +62 817-4127-621
                    </a>
                    <a href="mailto:info@andita.co.id"
                       class="flex items-center gap-2 text-sm transition-colors text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary">
                        <span class="material-symbols-outlined text-primary text-[16px] shrink-0">alternate_email</span>
                        info@andita.web.id
                    </a>
                </address>
            </div>
        </div>

        {{-- Bottom Bar --}}
        <div class="pt-8 text-center border-t border-slate-200 dark:border-slate-800 sm:text-left">
            <p class="text-xs text-slate-400">
                &copy; {{ date('Y') }} CV. Andita. Seluruh hak cipta dilindungi.
            </p>
        </div>
    </div>
</footer>