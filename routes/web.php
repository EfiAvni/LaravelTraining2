<?php

use Illuminate\Support\Facades\Route;

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