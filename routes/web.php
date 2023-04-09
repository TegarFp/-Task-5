<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PengunjungController;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\WelcomeController;
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

Route::controller(WelcomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/leaderboard', 'leaderboard');
});

Route::controller(PengunjungController::class)->group(function () {
    Route::get('/participant', 'index');
    Route::post('/participant', 'store');
    Route::put('/update-participant/{id}', 'update');
    Route::get('/delete-participant/{id}', 'delete');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index');
    Route::post('/login', 'auth');
    Route::get('/logout', 'logout')->middleware('auth');
});
