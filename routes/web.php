<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/curated-works', function () {
    return view('curatedWorks.curated_work');
});

