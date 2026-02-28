<?php

// routes/web.php

use Illuminate\Support\Facades\Route;


Route::get('/', fn() => view('pages.home'))->name('home');
Route::get('/layanan', fn() => view('pages.layanan'))->name('layanan');
Route::get('/tentang', fn() => view('pages.tentang'))->name('tentang');
Route::get('/kontak', fn() => view('pages.kontak'))->name('kontak');
Route::get('/portofolio', fn() => view('pages.portofolio'))->name('portofolio');

//Route::post('/kontak', [KontakController::class, 'send'])->name('kontak.send');
Route::post('/kontak', [KontakController::class, 'send'])
    ->middleware('throttle:3,1') // 5 request per 1 menit per IP
    ->name('kontak.send');
