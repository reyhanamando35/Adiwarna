<?php

use App\Http\Controllers\CuratedWorksController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/curated-works', function () {
    return view('curatedWorks.curated_work');
});
Route::get('/details/{slug}', function ($slug) {
    $view = "curatedWorks.details.$slug";

    if (!view()->exists($view)) {
        abort(404);
    }

    return view($view);
})->name('curatedWorks.details');



