<?php

use Illuminate\Support\Facades\Route;

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

//
Route::get('/', [\App\Http\Controllers\Foot::class, 'index'])->name('index');
Route::view('/classement','pages.point-table')->name('point');
 
Route::view('/milleur-buteur','pages.meilleur-buteur')->name('milleur-buteur');
 
Route::view('/meilleurs-butteurs','pages.point-table')->name('point');
 
