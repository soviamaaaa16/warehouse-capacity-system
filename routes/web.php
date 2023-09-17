<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('dashboard', function () {
    return view('dashboard');
});
Route::get('login', function () {
    return view('login');
});
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