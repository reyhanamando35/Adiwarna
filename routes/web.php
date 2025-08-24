<?php

use Illuminate\Support\Facades\Route;


Route::get('/', fn() => view('welcome'))->name('home');

Route::prefix('events')->name('events.')->group(function () {
    Route::get('/', fn() => view('upcoming'))->name('upcoming');

    Route::get('/ide', fn() => view('events.ide'))->name('ide');
    Route::get('/ruang-cerita', fn() => view('events.ruangCerita'))->name('ruangCerita');
    Route::get('/seni-karya-saku', fn() => view('events.seniKaryaSaku'))->name('seniKaryaSaku');
    Route::get('/lokakarya-ruparasa', fn() => view('events.lokakaryaRuparasa'))->name('lokakaryaRuparasa');
    Route::get('/sharing-alumni', fn() => view('events.sharingAlumni'))->name('sharingAlumni');
});

Route::get('/merch', function () {
    return view('merch');
});

