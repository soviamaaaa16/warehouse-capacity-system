<?php

use App\Http\Controllers\ChartController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\RakController;
use Illuminate\Support\Facades\Route;

Route::get('login', function () {
    return view('login');
});

Route::get('/dashboard', [ChartController::class,'showChart']);

Route::resource('/rak', RakController::class);

Route::resource('/material', MaterialController::class);

//API
//Route::resource('api/home', ['controller' => 'Api\Home']);