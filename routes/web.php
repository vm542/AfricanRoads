<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransporterController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\MeanController;

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

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/offers', [\App\Http\Controllers\OffersController::class, 'index']);
Route::get('/send', [\App\Http\Controllers\SendController::class, 'index']);

Route::get('/travel', [\App\Http\Controllers\TravelController::class, 'index']);
Route::get('/travel/get', [\App\Http\Controllers\TravelController::class, 'get']);
Route::post('/travel/store', [\App\Http\Controllers\TravelController::class, 'store']);

Route::post('/transport/store', [\App\Http\Controllers\TransporterController::class, 'store']);
Route::get('/transport/get', [\App\Http\Controllers\TransporterController::class, 'get']);
Route::get('/transport/{type}', [\App\Http\Controllers\TransporterController::class, 'index']);

Route::get('/country/index', [\App\Http\Controllers\CountryController::class, 'index']);
Route::post('/country/store', [\App\Http\Controllers\CountryController::class, 'store']);
Route::get('/country/{id}/delete', [\App\Http\Controllers\CountryController::class, 'delete']);

Route::post('/mean/store', [\App\Http\Controllers\MeanController::class, 'store']);
Route::get('/mean/{id}/delete', [\App\Http\Controllers\MeanController::class, 'delete']);
