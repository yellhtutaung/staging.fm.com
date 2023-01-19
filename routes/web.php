<?php

use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AdminAuthController;
use App\Http\Controllers\Backend\FruitController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\CountryController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\LangController;
use \App\Http\Controllers\TestController;
use App\Http\Controllers\Frontend\PasswordController;
use App\Http\Controllers\UniversalController;
use App\Http\Middleware\CheckAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/', [PagesController::class, 'home'])->name('mainPage');
Route::get('employees', [PagesController::class, 'employees']);
Route::get('client', [PagesController::class, 'client']);
Route::get('partnerships', [PagesController::class, 'partnerships']);
Route::post('contactToFm', [PagesController::class, 'contactToFm'])->name('contactToFm');
Route::get('target-market', [PagesController::class, 'market']);
Route::get('coldchain-transport', [PagesController::class, 'coldchain']);
Route::get('employees/job', [PagesController::class, 'job']);
Route::get('/register', [PagesController::class, 'register']);
Route::get('login', [AdminAuthController::class, 'login'])->name('login');
Route::post('password/forgot', [ResetPasswordController::class, 'customForgotPassword'])->name('customForgotPassword');
Route::get('otp/check', [ResetPasswordController::class, 'checkOtp'])->name('checkOtp');
Route::post('checkForgetOtp', [ResetPasswordController::class, 'checkForgetOtp'])->name('checkForgetOtp');

//Test Route
Route::get('test', [TestController::class, 'test'])->name('test');

Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');


//Admin

Route::get('admin/login', [AdminLoginController::class, 'showLoginForm']);
Route::post('admin/login', [AdminLoginController::class, 'login'])->name('admin.login');
Route::post('admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

Route::middleware(['auth'])->group(function ()
{
    Route::get('pricelist', [PagesController::class, 'priceList'])->name('priceList');
    Route::get('pricelist/{token}/history', [PagesController::class, 'priceListHistory'])->name('priceListHistory');
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::get('/sample', [ProfileController::class, 'userSamplePage'])->name('userSamplePage');
    Route::get('/edit-profile', [ProfileController::class, 'editProfile'])->name('edit-profile');
    Route::post('/update-profile', [ProfileController::class, 'updateProfile'])->name('update-profile');
    Route::get('/change-password', [ProfileController::class, 'changePassword'])->name('change-password');
    Route::post('update-password', [ProfileController::class, 'updatePassword'])->name('updatePassword');
});



Route::post('/contact', [PagesController::class, 'contact'])->name('contact');

Route::middleware([CheckAdmin::class])->prefix('admin')->group(function ()
{
    Route::get('/', [DashboardController::class, 'home'])->name('home');
    Route::post('adminUniversalSwitch', [UniversalController::class, 'adminUniversalSwitch'])->name('adminUniversalSwitch');
    Route::get('/job', [DashboardController::class, 'job'])->name('job');
    Route::prefix('fruit')->group(function () {
        Route::get('/', [FruitController::class, 'fruitList'])->name('fruitList');
        Route::get('add', [FruitController::class, 'addFruit'])->name('addFruit');
        Route::post('createFruit', [FruitController::class, 'createFruit'])->name('createFruit');
        Route::get('{id}/edit', [FruitController::class, 'editFruit'])->name('editFruit');
        Route::post('{id}/update', [FruitController::class, 'updateFruit'])->name('updateFruit');
        Route::get('{token}/history', [FruitController::class, 'history'])->name('fruitHistory');
    });
    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'userList'])->name('userList');
        Route::get('{id}/edit', [UserController::class, 'editUser'])->name('editUser');
        Route::get('{token}/details', [UserController::class, 'userDetails'])->name('userDetails');
        Route::post('update', [UserController::class, 'updateUser'])->name('updateUser');
    });
    Route::prefix('country')->group(function () {
        Route::get('/', [CountryController::class, 'countryList'])->name('countryList');
        Route::get('add', [CountryController::class, 'addCountry'])->name('addCountry');
        Route::post('create', [CountryController::class, 'createCountry'])->name('createCountry');
        Route::get('{token}/edit', [CountryController::class, 'editCountry'])->name('editCountry');
        Route::post('{token}/update', [CountryController::class, 'updateCountry'])->name('updateCountry');
    });

    Route::prefix('contact')->group(function () {
        Route::get('/', [ContactController::class, 'contactMessageList'])->name('contactMessageList');
    });

}); // For admin only

// User auth
Auth::routes();



