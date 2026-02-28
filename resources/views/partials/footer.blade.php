{{-- resources/views/partials/footer.blade.php --}}
<footer class="bg-slate-100 dark:bg-[#0b1216] border-t border-slate-200 dark:border-slate-800 pt-14 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">

        {{-- Top Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">

            {{-- Brand --}}
            <div class="sm:col-span-2 lg:col-span-1">
                <a href="{{ route('home') }}" class="flex items-center gap-3 mb-4">
                    <div class="flex items-center justify-center w-8 h-8 rounded-lg bg-primary/10 text-primary">
                        <span class="material-symbols-outlined text-[20px]">dns</span>
                    </div>
                    <span class="text-base font-bold text-slate-900 dark:text-white">Andita IT</span>
                </a>
                <p class="text-sm text-slate-500 dark:text-slate-400 leading-relaxed mb-5">
                    Solusi integrasi IT terpercaya — infrastruktur handal, jaringan aman, dan pengembangan software terbaik.
                </p>
                <div class="flex gap-3">
                    @foreach([
                        ['icon' => 'alternate_email', 'href' => 'mailto:info@andita.co.id', 'label' => 'Email'],
                        ['icon' => 'call',             'href' => 'tel:+622155558888',        'label' => 'Telepon'],
                        ['icon' => 'chat',             'href' => '#',                         'label' => 'WhatsApp'],
                    ] as $social)
                    <a href="{{ $social['href'] }}"
                       aria-label="{{ $social['label'] }}"
                       class="flex items-center justify-center w-9 h-9 rounded-lg bg-slate-200 dark:bg-slate-800 text-slate-500 dark:text-slate-400 hover:bg-primary hover:text-white dark:hover:bg-primary dark:hover:text-white transition-all">
                        <span class="material-symbols-outlined text-[18px]">{{ $social['icon'] }}</span>
                    </a>
                    @endforeach
                </div>
            </div>

            {{-- Layanan --}}
            <div>
                <h4 class="text-sm font-bold uppercase tracking-wider text-slate-900 dark:text-white mb-4">Layanan</h4>
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
                           class="text-sm text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors">
                            {{ $item }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Perusahaan --}}
            <div>
                <h4 class="text-sm font-bold uppercase tracking-wider text-slate-900 dark:text-white mb-4">Perusahaan</h4>
                <ul class="space-y-2.5">
                    @foreach([
                        ['label' => 'Beranda',    'route' => 'home'],
                        ['label' => 'Portofolio', 'route' => 'portofolio'],
                        ['label' => 'Kontak',     'route' => 'kontak'],
                    ] as $item)
                    <li>
                        <a href="{{ route($item['route']) }}"
                           class="text-sm text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors">
                            {{ $item['label'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Kontak --}}
            <div>
                <h4 class="text-sm font-bold uppercase tracking-wider text-slate-900 dark:text-white mb-4">Kontak</h4>
                <address class="not-italic space-y-3">
                    <p class="flex items-start gap-2 text-sm text-slate-500 dark:text-slate-400">
                        <span class="material-symbols-outlined text-primary text-[16px] mt-0.5 shrink-0">location_on</span>
                        Yogyakarta, Indonesia
                    </p>
                    <a href="tel:+622155558888"
                       class="flex items-center gap-2 text-sm text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors">
                        <span class="material-symbols-outlined text-primary text-[16px] shrink-0">call</span>
                        +62 21 5555 8888
                    </a>
                    <a href="mailto:info@andita.co.id"
                       class="flex items-center gap-2 text-sm text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors">
                        <span class="material-symbols-outlined text-primary text-[16px] shrink-0">alternate_email</span>
                        info@andita.co.id
                    </a>
                </address>
            </div>
        </div>

        {{-- Bottom Bar --}}
        <div class="flex flex-col sm:flex-row items-center justify-between gap-3 pt-8 border-t border-slate-200 dark:border-slate-800">
            <p class="text-xs text-slate-400 text-center sm:text-left">
                &copy; {{ date('Y') }} CV. Andita. Seluruh hak cipta dilindungi.
            </p>
            <p class="text-xs text-slate-400">
                Yogyakarta, Indonesia
            </p>
        </div>
    </div>
</footer>
