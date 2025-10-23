<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard-1');
});
Route::get('/dashboard-2', function () {
    return view('dashboard-2');
});
