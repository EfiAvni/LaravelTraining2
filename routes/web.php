<?php

use App\Http\Controllers\SinifController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OgrenciController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/haberler', function () {
    return view('haberler-duyurular');
});


Route::get('/etkinlikler', function () {
    return view('etkinlikler');
});

Route::get('/dersprogrami', function () {
    return view('dersprogrami');
});

Route::get('/admin', function () {
    return view('admin.login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/ayarlar', function () {
    return view('admin.ayarlar');
});

Route::get('/aidatlar', function () {
    return view('admin.aidatlar');
});

Route::get('/ogrenciler', function () {
    return view('admin.ogrenciler');
});

Route::get('/siniflar', [SinifController::class, 'index'])
    ->name('admin.siniflar');

Route::get('/ders-programlari', function () {
    return view('admin.ders-programlari');
});

Route::get('/duyurular-ve-haberler', function () {
    return view('admin.duyurular-ve-haberler');
});

Route::post('/ogrenciler', [OgrenciController::class, 'store'])
    ->name('ogrenciler.store');

Route::post('/siniflar', [SinifController::class, 'store'])
->name('siniflar.store');