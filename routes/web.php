<?php

use App\Http\Controllers\CompagnieController;
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

Route::get('/', [CompagnieController::class, 'home']);
Route::get('/create', [CompagnieController::class, 'create'])->name('create');
Route::post('/store/compagnie', [CompagnieController::class, 'store'])->name('store.compagnie');
Route::get('/show/{id}', [CompagnieController::class, 'show']);
Route::get('/show/edit/{id}', [CompagnieController::class, 'edit']);
Route::get('show/delete/{id}', [CompagnieController::class, 'delete']);
Route::post('show/edit/update/{id}', [CompagnieController::class, 'update'])->name('update.compagnie');