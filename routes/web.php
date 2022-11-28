<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AdminAuthController;
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

Route::get('/', [\App\Http\Controllers\Frontend\PagesController::class, 'home']);

Route::get('employees', [\App\Http\Controllers\Frontend\PagesController::class, 'employees']);

Route::get('client', [\App\Http\Controllers\Frontend\PagesController::class, 'client']);

Route::get('partnerships', [\App\Http\Controllers\Frontend\PagesController::class, 'partnerships']);

Route::get('target-market', [\App\Http\Controllers\Frontend\PagesController::class, 'market']);

Route::get('coldchain-transport', [\App\Http\Controllers\Frontend\PagesController::class, 'coldchain']);

Route::get('login', [AdminAuthController::class, 'login'])->name('login');
Route::post('login', [AdminAuthController::class, 'post_login'])->name('post.login');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'home'])->name('home');
});




//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
