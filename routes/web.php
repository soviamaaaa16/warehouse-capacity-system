<?php

use App\Http\Controllers\ChartController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\RakController;
use Illuminate\Support\Facades\Route;

Route::get('login', function () {
    return view('login');
});
<<<<<<< HEAD
Route::get('denah', function () {
    return view('denah');
});
Route::get('wire', function () {
    return view('wire');
});
Route::get('connector', function () {
    return view('connector');
});
Route::get('terminal', function () {
    return view('terminal');
});
Route::get('assy', function () {
    return view('assy');
});
Route::get('tes', function () {
    return view('tes');
});
=======

Route::get('/dashboard', [ChartController::class,'showChart']);

Route::resource('/rak', RakController::class);

Route::resource('/material', MaterialController::class);
>>>>>>> e8aada1a858d1939bc0f85a429fb988ce4531e41
