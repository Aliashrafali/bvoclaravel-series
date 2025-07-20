<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\adminController;

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

Route::get('/', [HomeController::class, 'Index'])->name('index');
Route::get('/admin', [adminController::class, 'Admin'])->name('index');
Route::get('/create', [adminController::class, 'Create'])->name('create');
Route::post('/store', [adminController::class, 'Store'])->name('store');
Route::get('/view', [adminController::class, 'View'])->name('view');
