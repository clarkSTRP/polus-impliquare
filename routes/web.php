<?php

use App\Models\Offers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\ResponsesController;

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


 Route::get('/admin', function () {
    if (Gate::denies('access-admin')){
        abort('403');
    }
    return view('admin.index');

});
Route::get('/', [MainController::class, "index"])->name('bienvenue');

Route::controller(ResponsesController::class)->prefix('main/{offers}')->name('responses.')->group(function () {
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
});

Route::resource ('offers',OffersController::class);
Route::resource ('user',UserController::class);
Route::resource ('main',MainController::class);

Auth::routes();

Route::get('/home', [MainController::class, "index"])->name('bienvenue');
