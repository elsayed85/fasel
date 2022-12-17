<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\TvController;
use App\Services\FaselApi;
use Illuminate\Support\Facades\Http;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('movies', [MoviesController::class, 'index'])->name('movies.index');
Route::get('movies/{id}', [MoviesController::class, 'show'])->name('movies.show');


Route::get('tv', [TvController::class , 'index'])->name('tv.index');
Route::get('tv/{id}', [TvController::class , 'show'])->name('tv.show');


Route::get('search', function () {
    return view('search');
})->name('search');


Route::get('test', function () {


    return view('search' , [
    ]);
})->name('test');
