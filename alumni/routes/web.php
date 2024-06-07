<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KuisionerController;
use App\Http\Controllers\HasilKuisionerController;
use App\Http\Controllers\LulusanController;
use App\Http\Controllers\SosialMediaController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PostinganController;


Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/post', function () {
    return view('post');
});

Route::resource('lulusan', LulusanController::class);
Route::resource('sosial-media', SosialMediaController::class);
Route::resource('pekerjaans', PekerjaanController::class);
Route::resource('postingans', PostinganController::class);
Route::resource('kuisioner', KuisionerController::class);
Route::resource('hasil-kuisioners', HasilKuisionerController::class);
