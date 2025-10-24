<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard-1');
});
Route::get('/dashboard-2', function () {
    return view('dashboard-2');
});
Route::get('/dashboard-3', function () {
    return view('dashboard-3');
});
Route::get('/dashboard-4', function () {
    return view('dashboard-4');
});
Route::get('/dashboard-5', function () {
    return view('dashboard-5');
});
