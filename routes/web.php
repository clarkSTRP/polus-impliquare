<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\ResponsesController;
use App\Models\Offers;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin.index');
});
Route::controller(ResponsesController::class)->prefix('main/{offers}')->name('responses.')->group(function () {
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
});

Route::resource ('offers',OffersController::class);
Route::resource ('user',UserController::class);
Route::resource ('main',MainController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
