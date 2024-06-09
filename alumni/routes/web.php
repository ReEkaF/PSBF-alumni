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
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Session;
Route::get('/', function () {
    if ( ! empty(Session::get('role')) ) {
        if (Session::get('role') == 'admin') {
            return redirect('admin/home');
        } else if (Session::get('role') == 'lulusan') {
            return redirect('lulusan');
        }
    } else {
        return redirect('login');
    }
});

Route::get('/', function () {
    return view('post');
});

// Auth::routes();
Route::get('/profile/{id}', [ProfileController::class, 'index'] )->name('profile');
Route::get('/search', function () {
    return view('search');
});
Route::get('/post', function () {
    return view('post');
});
Route::group(['prefix' => 'login'], function () {
    Route::get('', [LoginController::class, 'index'] )->name('login');
    Route::post('/check', [LoginController::class, 'postLogin'])->name('login.check');
});
Route::post('/logout', [LoginController::class, 'getLogout'])->name('logout');

Route::group(['middleware' => 'admin'], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('home', [AdminController::class, 'index'] );
    });
});
Route::group(['middleware' => 'lulusan'], function () {
    Route::resource('lulusan', LulusanController::class);
});
// Route::resource('lulusan', LulusanController::class);
// Route::resource('sosial-media', SosialMediaController::class);
// Route::resource('pekerjaans', PekerjaanController::class);
// Route::resource('postingans', PostinganController::class);
// Route::resource('kuisioner', KuisionerController::class);
// Route::resource('hasil-kuisioners', HasilKuisionerController::class);
