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

Route::get('/r', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/search', [App\Http\Controllers\SearchController::class, 'index']);
Route::get('/', [App\Http\Controllers\ClientController::class, 'home']);
Route::get('/listing', [App\Http\Controllers\ClientController::class, 'index']);
Route::get('/list', [App\Http\Controllers\ClientController::class, 'list']);
Route::get('/single/{id}', [App\Http\Controllers\ClientController::class, 'single']);
Route::get('/addHotel', [App\Http\Controllers\ClientController::class, 'addHotel']);
Route::post('/saveHotel', [App\Http\Controllers\ClientController::class, 'saveHotel'])->name('saveHotel');
Route::post('/saveRoom', [App\Http\Controllers\ClientController::class, 'saveRoom'])->name('saveRoom');
Route::post('/saveImages', [App\Http\Controllers\ClientController::class, 'saveImages'])->name('saveImages');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);
Route::get('/admin/listing', [App\Http\Controllers\AdminController::class, 'listing']);
Route::get('/admin/single/{id}', [App\Http\Controllers\AdminController::class, 'single']);
