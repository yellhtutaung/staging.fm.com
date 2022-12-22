<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AdminAuthController;
use App\Http\Controllers\Backend\FruitController;
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
Route::get('/register', [PagesController::class, 'register']);
Route::get('login', [AdminAuthController::class, 'login'])->name('login');


// User auth
Auth::routes();

//Admin

Route::get('admin/login', [AdminLoginController::class, 'showLoginForm']);
Route::post('admin/login', [AdminLoginController::class, 'login'])->name('admin.login');
Route::post('admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

Route::middleware(['auth'])->group(function ()
{

});
Route::get('pricelist', [PagesController::class, 'priceList'])->name('priceList');

Route::middleware([CheckAdmin::class])->prefix('admin')->group(function ()
{
    Route::get('/', [DashboardController::class, 'home'])->name('home');
    Route::get('/job', [DashboardController::class, 'job'])->name('job');
    Route::prefix('fruit')->group(function () {
        Route::get('', [FruitController::class, 'fruitList'])->name('fruitList');
        Route::get('add', [FruitController::class, 'addFruit'])->name('addFruit');
        Route::post('createFruit', [FruitController::class, 'createFruit'])->name('createFruit');
    });

}); // For admin only

