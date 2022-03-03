<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reflected-xss', [\App\Http\Controllers\ReflectedXssController::class, 'index']);
Route::get('/persistent-xss', [\App\Http\Controllers\PersistentXssController::class, 'index']);
Route::get('/sql-injection', [\App\Http\Controllers\SqlInjectionController::class, 'index']);
