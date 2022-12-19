<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AdminAuthController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Middleware\Admin;
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

Route::get('/', [PagesController::class, 'home']);
Route::get('employees', [PagesController::class, 'employees']);
Route::get('client', [PagesController::class, 'client']);
Route::get('partnerships', [PagesController::class, 'partnerships']);
Route::get('target-market', [PagesController::class, 'market']);
Route::get('coldchain-transport', [PagesController::class, 'coldchain']);
Route::get('employees/job', [PagesController::class, 'job']);
Route::get('/register', [PagesController::class, 'register']);
Route::get('login', [AdminAuthController::class, 'login'])->name('login');

Route::get('admin/login', [AdminAuthController::class, 'login']);

Route::middleware([Admin::class])->prefix('admin')->name('admin.')->group(function ()
{
    Route::post('login', [AdminAuthController::class, 'post_login'])->name('post.login');
    Route::get('/', [DashboardController::class, 'home'])->name('home');
    Route::get('/job', [DashboardController::class, 'job'])->name('job');
});

