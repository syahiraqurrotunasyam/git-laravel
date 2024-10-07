<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Alya",
        "email" => "syahiraalya@gmail.com"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('posts/{id}', [PostController::class, 'show']);
Route::get('/add', [PostController::class, 'add']);
Route::post('/save', [PostController::class, 'save']);
// //menampilkan post dalam bentuk tabel
Route::get('/data', [PostController::class, 'data'])->name('data');
// // menampilkan form edit
Route::get('/edit/{id}', [PostController::class, 'edit']);
// // eksekusi update
Route::post('/update/{id}', [PostController::class, 'update']);
// // hapus
Route::delete('/delete/{id}', [PostController::class, 'delete']);
Route::get('/data-post', [PostController::class, 'dataPost'])->name('data-post.index');
Route::get('data-konten', function () {
    return view('layout.content');
});
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login',  [LoginController::class, 'check_login'])->name('login.check_login');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/logout', [DashboardController::class, 'logout'])->name('dashboard.logout');
