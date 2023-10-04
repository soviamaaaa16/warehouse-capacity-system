<?php

use App\Http\Controllers\ChartController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\DenahController;
use Illuminate\Support\Facades\Route;

Route::get('login', function () {
    return view('login');
});

Route::get('wire', function () {
    return view('wire');
});

Route::get('tes', function () {
    return view('tes');
});


Route::get('/dashboard', [ChartController::class,'showChart']);

Route::resource('/rak', RakController::class);

Route::resource('/material', MaterialController::class);

Route::resource('/denah', DenahController::class);