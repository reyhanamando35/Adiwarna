<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('merch');
});

Route::get('/merch', function () {
    return view('merch');
});

