<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

// Route::get('/', function () {
//     return view('auth.login');
// });

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('postlogin');

Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Registration Routes
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('showregister')->middleware('guest');
Route::post('register', [RegisterController::class, 'register']);

// Home Route
Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::post('store-doctor', [DokterController::class, 'storeDokter'])->name('store.doctor')->middleware('auth');
Route::get('form-doctor', [DokterController::class, 'formDokter'])->name('form.doctor')->middleware('auth');
Route::get('edit-doctor/{id}/edit', [DokterController::class, 'editDokter'])->name('edit.doctor')->middleware('auth');
Route::post('update-doctor/{id}', [DokterController::class, 'update'])->name('update.doctor')->middleware('auth');
Route::delete('delete-doctor/{id}', [DokterController::class, 'destroy'])->name('delete.doctor')->middleware('auth');

require __DIR__.'/auth.php';
