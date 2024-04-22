<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/home');
});

Route::get('/demostratif', function () {
    return view('pages/projects/demostratif');
});
