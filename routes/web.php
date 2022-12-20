<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AdminAuthController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Middleware\CheckAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;

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

Route::get('/', [PagesController::class, 'home']);
Route::get('employees', [PagesController::class, 'employees']);
Route::get('client', [PagesController::class, 'client']);
Route::get('partnerships', [PagesController::class, 'partnerships']);
Route::get('target-market', [PagesController::class, 'market']);
Route::get('coldchain-transport', [PagesController::class, 'coldchain']);
Route::get('employees/job', [PagesController::class, 'job']);


// User auth
Auth::routes();
Route::get('home', function () {
    return view('home');
});

//Admin

Route::get('admin/login', [AdminLoginController::class, 'showLoginForm']);
Route::post('admin/login', [AdminLoginController::class, 'login'])->name('admin.login');
Route::post('admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

Route::middleware([CheckAdmin::class])->prefix('admin')->name('admin.')->group(function ()
{
    Route::get('', [DashboardController::class, 'home'])->name('home');
    Route::get('/job', [DashboardController::class, 'job'])->name('job');
});

