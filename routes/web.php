<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('dashboard');

Route::get('/visikota', function () {
    return view('visikota');
})->name('visikota');

Route::get('/visiarpus', function () {
    return view('visiarpus');
})->name('visiarpus');

Route::get('/tupoksi', function () {
    return view('tupoksi');
})->name('tupoksi');

Route::get('/FAQarsip', function () {
    return view('FAQarsip');
})->name('FAQarsip');

Route::get('/FAQperpus', function () {
    return view('FAQperpus');
})->name('FAQperpus');