<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SarmoController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [SarmoController::class, 'login'])->name('login');
Route::get('/login', [SarmoController::class, 'login'])->name('login');
Route::get('/createuser', [SarmoController::class, 'createuser'])->name('createuser');
Route::get('/recoverpassword', [SarmoController::class, 'recoverpassword'])->name('recoverpassword');
Route::get('/register', [SarmoController::class, 'register'])->name('register');
Route::post('/store2', [SarmoController::class, 'store2'])->name('store2');
Route::post('/store', [LoginController::class, 'store'])->name('store');
Route::get('/calendar', [SarmoController::class, 'calendar'])->name('calendar');
Route::post('/store1', [SarmoController::class, 'store1'])->name('store1');
Route::get('/disciplinary_process', [SarmoController::class, 'disciplinary_process'])->name('disciplinary_process');
Route::get('/loggedout', [SarmoController::class, 'destroy'])->name('destroy');


Route::get('/prise', [SarmoController::class, 'prise'])->name('prise');
Route::get('/appointement', [SarmoController::class, 'appointement'])->name('appointement');
Route::get('/update', [SarmoController::class, 'update'])->name('update');
Route::get('/search', [SarmoController::class, 'search'])->name('search');
Route::get('/show', [LoginController::class, 'show'])->name('show');
Route::get('/delete', [SarmoController::class, 'delete'])->name('delete');