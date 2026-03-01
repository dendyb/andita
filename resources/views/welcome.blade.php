<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Andita </title>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Theme Configuration -->
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#13a4ec", // Keeping the configured primary, but we'll lean into the dark navy backgrounds requested
                        "background-light": "#f6f7f8",
                        "background-dark": "#101c22", // This matches the "deep professional navy blue" vibe well
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
</head>
<body class="flex flex-col min-h-screen bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100">
<div class="relative flex flex-col w-full h-auto min-h-screen overflow-x-hidden">
<!-- Header / Navbar -->
<header class="sticky top-0 z-50 flex items-center justify-between px-6 py-4 border-b border-solid whitespace-nowrap border-slate-200 dark:border-slate-800 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-sm md:px-10 lg:px-40">
<div class="flex items-center gap-4">
<div class="flex items-center justify-center rounded size-8 bg-primary/10 text-primary">
<span class="text-2xl material-symbols-outlined"></span>
</div>

<h2 class="text-xl font-bold leading-tight tracking-tight text-slate-900 dark:text-white">Andita</h2>
</div>
<div class="items-center justify-end flex-1 hidden gap-8 md:flex">
    
<nav class="flex items-center gap-8">
<a class="text-sm font-medium transition-colors text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary" href="#">Home</a>
<a class="text-sm font-medium transition-colors text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary" href="#">Layanan</a>
<a class="text-sm font-medium transition-colors text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary" href="#">Portofolio</a>
<a class="text-sm font-medium transition-colors text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary" href="#">Kontak</a>
</nav>
<button class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-5 bg-primary hover:bg-primary/90 text-white text-sm font-bold leading-normal tracking-wide transition-colors">
<span class="truncate">Hubungi Kami</span>
</button>
</div>
<!-- Mobile Menu Icon -->
<button class="md:hidden text-slate-900 dark:text-white">
<span class="material-symbols-outlined">menu</span>
</button>
</header>
<!-- Main Hero Section -->
<main class="flex flex-col flex-1">
<div class="flex flex-col h-full layout-container grow">
<div class="flex justify-center flex-1 w-full">
<div class="flex flex-col flex-1 w-full layout-content-container">
<div class="@container w-full h-full flex-1 flex flex-col">
<div class="flex flex-col justify-center flex-1 p-4 md:p-6 lg:p-8">
<!-- Hero Card -->
<div class="relative flex min-h-[600px] w-full flex-col gap-6 overflow-hidden rounded-xl bg-cover bg-center bg-no-repeat shadow-2xl items-center justify-center p-8 md:p-16 text-center group" data-alt="Two technicians discussing inside a modern server room with glowing blue lights" style='background-image: linear-gradient(rgba(16, 28, 34, 0.7) 0%, rgba(16, 28, 34, 0.85) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuAMgocm3lqW6ueqgMXynU1TBnXMglN6V9kRkBcaMW9noUSVYvGUfL0KPmaxFHZjSpjuXsRUlOyePwHd9KL8q9w6828NDS8Y4kV2XBiHonwzrv_XcH5fWF_znol6cjMarB6DA21dvSCU0_95cmIDdNY0UVRyP4X3ZwByVTCpYX5VrTe4tKgBi0MJ8DOiJGtKaAAKCd93s2pSIkPw2pk-ZRtxkn7g9dob8Oo3bUcpPa6rwjUOpEqSt6BjEl3zeOdZoSPRhuCbucWz54z6");'>
<!-- Decorative overlay elements -->
<div class="absolute inset-0 bg-gradient-to-t from-background-dark via-transparent to-transparent opacity-60"></div>
<div class="absolute top-0 left-0 w-full h-1 opacity-50 bg-gradient-to-r from-transparent via-primary to-transparent"></div>
<div class="relative z-10 flex flex-col items-center max-w-4xl gap-6 animate-fade-in-up">
<div class="inline-flex items-center gap-2 px-3 py-1 border rounded-full bg-primary/20 border-primary/30 backdrop-blur-md">
<span class="relative flex w-2 h-2">
<span class="absolute inline-flex w-full h-full rounded-full opacity-75 animate-ping bg-primary"></span>
<span class="relative inline-flex w-2 h-2 rounded-full bg-primary"></span>
</span>
<span class="text-xs font-semibold tracking-wider uppercase text-primary">CV. Andita, Yogyakarta</span>
</div>
<h1 class="text-white text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black leading-[1.1] tracking-tight">
                                            Solusi Integrasi IT <br class="hidden md:block"/>
<span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-cyan-300">Terpercaya</span>
</h1>
<p class="max-w-2xl mx-auto text-base font-normal leading-relaxed text-slate-300 sm:text-lg md:text-xl">
                                             Menyediakan Infrastruktur IT, Instalasi Jaringan / Fiber Optic, dan Pengembangan Aplikasi Mobile/Web untuk akselerasi pertumbuhan bisnis Anda.
                                        </p>
<div class="flex flex-col flex-wrap justify-center w-full gap-4 mt-4 sm:flex-row">
<button class="flex w-full sm:w-auto min-w-[160px] cursor-pointer items-center justify-center gap-2 overflow-hidden rounded-lg h-12 px-6 bg-primary hover:bg-primary/90 text-white text-base font-bold transition-all transform hover:-translate-y-0.5 shadow-lg shadow-primary/25">
<span class="material-symbols-outlined text-[20px]">rocket_launch</span>
<span class="truncate">Mulai Konsultasi</span>
</button>
<button class="flex w-full sm:w-auto min-w-[160px] cursor-pointer items-center justify-center gap-2 overflow-hidden rounded-lg h-12 px-6 bg-white/10 hover:bg-white/20 border border-white/10 backdrop-blur-sm text-white text-base font-bold transition-all">
<span class="material-symbols-outlined text-[20px]">grid_view</span>
<span class="truncate">Lihat Portofolio</span>
</button>
</div>
<!-- Trust Indicators -->
<div class="w-full max-w-3xl pt-8 mt-8 border-t border-white/10">
<p class="mb-4 text-sm font-medium tracking-widest uppercase text-slate-400">Dipercaya oleh Perusahaan Terkemuka</p>
<div class="flex flex-wrap items-center justify-center gap-8 transition-all duration-500 opacity-60 grayscale hover:grayscale-0">
<!-- Simulated Logos using Text/Icons for simplicity as requested no external SVGs -->
<div class="flex items-center gap-2 text-lg font-bold text-white"><span class="material-symbols-outlined">g_translate</span> GlobalTech</div>
<div class="flex items-center gap-2 text-lg font-bold text-white"><span class="material-symbols-outlined">account_balance</span> BankJaya</div>
<div class="flex items-center gap-2 text-lg font-bold text-white"><span class="material-symbols-outlined">factory</span> IndiIndustries</div>
<div class="flex items-center gap-2 text-lg font-bold text-white"><span class="material-symbols-outlined">local_shipping</span> FastLogistics</div>
</div>
</div>
</div>
</div>
<!-- Feature Highlights (Below Hero) -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8 max-w-[1200px] mx-auto w-full px-4">
<div class="p-6 rounded-xl bg-background-light dark:bg-[#15232b] border border-slate-200 dark:border-slate-800 hover:border-primary/50 transition-colors group/card">
<div class="flex items-center justify-center mb-4 transition-colors rounded-lg size-12 bg-primary/10 group-hover/card:bg-primary group-hover/card:text-white text-primary">
<span class="text-3xl material-symbols-outlined">lan</span>
</div>
<h3 class="mb-2 text-xl font-bold text-slate-900 dark:text-white">Infrastruktur &amp; Jaringan</h3>
<p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                            Perancangan dan implementasi topologi jaringan yang aman, stabil, dan scalable untuk kebutuhan enterprise.
                                        </p>
</div>
<div class="p-6 rounded-xl bg-background-light dark:bg-[#15232b] border border-slate-200 dark:border-slate-800 hover:border-primary/50 transition-colors group/card">
<div class="flex items-center justify-center mb-4 transition-colors rounded-lg size-12 bg-primary/10 group-hover/card:bg-primary group-hover/card:text-white text-primary">
<span class="text-3xl material-symbols-outlined">terminal</span>
</div>
<h3 class="mb-2 text-xl font-bold text-slate-900 dark:text-white">Software Development</h3>
<p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                            Pengembangan aplikasi web dan mobile kustom yang disesuaikan dengan proses bisnis unik perusahaan Anda.
                                        </p>
</div>
<div class="p-6 rounded-xl bg-background-light dark:bg-[#15232b] border border-slate-200 dark:border-slate-800 hover:border-primary/50 transition-colors group/card">
<div class="flex items-center justify-center mb-4 transition-colors rounded-lg size-12 bg-primary/10 group-hover/card:bg-primary group-hover/card:text-white text-primary">
<span class="text-3xl material-symbols-outlined">security</span>
</div>
<h3 class="mb-2 text-xl font-bold text-slate-900 dark:text-white">IT Security Audit</h3>
<p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                            Layanan audit keamanan sistem untuk memastikan data dan aset digital Anda terlindungi dari ancaman siber.
                                        </p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</body></html>