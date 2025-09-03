<?php

use App\Http\Controllers\CuratedWorksController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');
// Route::get('/', fn() => view('welcome'))->name('home');

Route::prefix('events')->name('events.')->group(function () {
    Route::get('/', fn() => view('upcoming'))->name('upcoming');

    Route::get('/ide', fn() => view('events.ide'))->name('ide');
    Route::get('/ruang-cerita', fn() => view('events.ruangCerita'))->name('ruangCerita');
    Route::get('/seni-karya-saku', fn() => view('events.seniKaryaSaku'))->name('seniKaryaSaku');
    Route::get('/lokakarya-ruparasa', fn() => view('events.lokakaryaRuparasa'))->name('lokakaryaRuparasa');
    Route::get('/sharing-alumni', fn() => view('events.sharingAlumni'))->name('sharingAlumni');
});


Route::get('/curated-works', function () {
    return view('curatedWorks.curated_work');
})->name('curatedWorks.index');
Route::get('/details/{slug}', function ($slug) {
    $view = "curatedWorks.details.$slug";

    if (!view()->exists($view)) {
        abort(404);
    }

    return view($view);
})->name('curatedWorks.details');
// Route::get('/details/{slug}', [CuratedWorksController::class, 'show'])
//      ->name('curatedWorks.details');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/merch', function () {
    return view('merch');
})->name('merch');

