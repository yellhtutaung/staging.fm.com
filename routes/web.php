<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AdminAuthController;
use App\Http\Controllers\Backend\AccountController;
use App\Http\Controllers\Backend\FruitController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\CountryController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\LangController;
use \App\Http\Controllers\TestController;
use App\Http\Controllers\Frontend\PasswordController;
use App\Http\Controllers\UniversalController;
use App\Http\Middleware\CheckAdmin;
use App\Http\Middleware\PermissionCheck;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
//use App\Http\Controllers\Auth\RegisterController;
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
Route::prefix('blogs')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blogIndex');
});
Route::get('employees', [PagesController::class, 'employees']);
Route::get('client', [PagesController::class, 'client']);
Route::get('partnerships', [PagesController::class, 'partnerships']);
Route::post('contactToFm', [PagesController::class, 'contactToFm'])->name('contactToFm');
Route::get('target-market', [PagesController::class, 'market']);
Route::get('coldchain-transport', [PagesController::class, 'coldchain']);
Route::get('employees/job', [PagesController::class, 'job']);
//Route::get('/register', [PagesController::class, 'register'])->name('userRegister');
Route::get('login', [AdminAuthController::class, 'login'])->name('login');
Route::post('password/forgot', [ResetPasswordController::class, 'customForgotPassword'])->name('customForgotPassword');
Route::get('otp/check', [ResetPasswordController::class, 'checkOtp'])->name('checkOtp');
Route::post('checkForgetOtp', [ResetPasswordController::class, 'checkForgetOtp'])->name('checkForgetOtp');
Route::post('saveRegister', [RegisterController::class, 'saveRegister'])->name('saveRegister');
Route::post('customRegister', [RegisterController::class, 'customRegister'])->name('customRegister');
Route::get('register/otp/check', [RegisterController::class, 'registerOtpCheck'])->name('registerOtpCheck');

//Test Route
Route::get('test', [TestController::class, 'test'])->name('test');

Route::post('lang/change', [LangController::class, 'change'])->name('changeLang');


//Admin

Route::get('admin/login', [AdminLoginController::class, 'showLoginForm']);
Route::post('admin/login', [AdminLoginController::class, 'login'])->name('admin.login');
Route::post('admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

Route::middleware(['auth','ban'])->group(function ()
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
Route::post('adminUniversalSwitch', [UniversalController::class, 'adminUniversalSwitch'])->name('adminUniversalSwitch');

Route::middleware([CheckAdmin::class,PermissionCheck::class])->prefix('admin')->group(function ()
{
    Route::get('/', [DashboardController::class, 'home'])->name('home');
    Route::get('/job', [DashboardController::class, 'job'])->name('job');
    Route::prefix('fruit')->group(function () {
        Route::get('/', [FruitController::class, 'fruitList'])->name('fruitList');
        Route::get('add', [FruitController::class, 'addFruit'])->name('addFruit');
        Route::post('create', [FruitController::class, 'createFruit'])->name('createFruit');
        Route::get('{token}/details', [FruitController::class, 'fruitDetails'])->name('fruitDetails');
        Route::get('{id}/edit', [FruitController::class, 'editFruit'])->name('editFruit');
        Route::post('{id}/update', [FruitController::class, 'updateFruit'])->name('updateFruit');
        Route::get('{token}/history', [FruitController::class, 'history'])->name('fruitHistory');
    });
    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'userList'])->name('userList');
        Route::get('{id}/edit', [UserController::class, 'editUser'])->name('editUser');
        Route::get('{token}/details', [UserController::class, 'userDetails'])->name('userDetails');
        Route::post('update', [UserController::class, 'updateUser'])->name('updateUser');
        Route::post('/banUser', [UserController::class, 'banUser'])->name('banUser');
    });
    Route::prefix('account')->group(function () {
        Route::get('/', [AccountController::class, 'accountList'])->name('accountList');
        Route::get('/add', [AccountController::class, 'addAccount'])->name('addAccount');
        Route::post('create', [AccountController::class, 'createAccount'])->name('createAccount');
        Route::get('{token}/details', [AccountController::class, 'accountDetails'])->name('accountDetails');
        Route::get('{token}/edit', [AccountController::class, 'editAccount'])->name('editAccount');
        Route::post('{token}/update', [AccountController::class, 'updateAccount'])->name('updateAccount');
    });
    Route::prefix('country')->group(function () {
        Route::get('/', [CountryController::class, 'countryList'])->name('countryList');
        Route::get('add', [CountryController::class, 'addCountry'])->name('addCountry');
        Route::post('create', [CountryController::class, 'createCountry'])->name('createCountry');
        Route::get('{token}/edit', [CountryController::class, 'editCountry'])->name('editCountry');
        Route::post('{token}/update', [CountryController::class, 'updateCountry'])->name('updateCountry');
    });
    Route::prefix('permission')->group(function () {
        Route::get('/', [PermissionController::class, 'permissionList'])->name('permissionList');
        Route::get('add', [PermissionController::class, 'addPermission'])->name('addPermission');
        Route::post('create', [PermissionController::class, 'createRoleAndPermissions'])->name('createRoleAndPermissions');
        Route::get('{id}/details', [PermissionController::class, 'permissionDetails'])->name('permissionDetails');
        Route::get('{id}/edit', [PermissionController::class, 'editPermission'])->name('editPermission');
        Route::post('{id}/update', [PermissionController::class, 'updatePermission'])->name('updatePermission');
        Route::post('{id}/delete', [PermissionController::class, 'deletePermission'])->name('deletePermission');

    });
    Route::prefix('contact')->group(function () {
        Route::get('/', [ContactController::class, 'contactMessageList'])->name('contactMessageList');
    });


}); // For admin only
Route::post('admin/permission/sort', [PermissionController::class, 'sort'])->name('sortPermission');


// User auth
Auth::routes();



