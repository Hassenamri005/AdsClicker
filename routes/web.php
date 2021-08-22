<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// admin routes
Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth', 'PreventBackHistory']], function(){
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('publish', [AdminController::class, 'publishAds'])->name('admin.publish');
    Route::get('checkout', [AdminController::class, 'checkout'])->name('admin.checkout');


    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('settings', [AdminController::class, 'settings'])->name('admin.settings');
});


// user routes
Route::group(['prefix'=>'user', 'middleware'=>['isUser', 'auth', 'PreventBackHistory']], function(){
    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::view('publish', 'dashboards.users.publish');
    Route::post('publish', [UserController::class, 'publishAds'])->name('user.publish');
    Route::get('checkout', [UserController::class, 'checkout'])->name('user.checkout');

    Route::get('profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('settings', [UserController::class, 'settings'])->name('user.settings');
});




