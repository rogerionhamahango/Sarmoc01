<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SarmoController;

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
Route::get('/createuser', [SarmoController::class, 'createuser'])->name('createuser');
Route::get('/recoverpassword', [SarmoController::class, 'recoverpassword'])->name('recoverpassword');
Route::get('/register', [SarmoController::class, 'register'])->name('register');
Route::get('/calendar', [SarmoController::class, 'calendar'])->name('calendar');
Route::post('/store1', [SarmoController::class, 'store1'])->name('store1');
Route::get('/disciplinary_process', [SarmoController::class, 'disciplinary_process'])->name('disciplinary_process');
//Route::get('/register', [SarmoController::class, 'register'])->name('register');
Route::post('/store', [SarmoController::class, 'store'])->name('store');

Route::get('/prise', [SarmoController::class, 'prise'])->name('prise');
Route::get('/appointement', [SarmoController::class, 'appointement'])->name('appointement');
Route::get('/update', [SarmoController::class, 'update'])->name('update');
Route::get('/search', [SarmoController::class, 'search'])->name('search');
Route::get('/show', [SarmoController::class, 'show'])->name('show');
Route::get('/delete', [SarmoController::class, 'delete'])->name('delete');