<?php

use App\Http\Controllers\Admin\AjaxController;
use App\Http\Controllers\EndUser\Auth\LoginController;
use App\Http\Controllers\EndUser\Auth\RegisterController;
use App\Http\Controllers\EndUser\CarController;
use App\Http\Controllers\EndUser\ContactController;
use App\Http\Controllers\EndUser\HomeController;
use App\Http\Controllers\EndUser\PageController;
use App\Http\Controllers\EndUser\ProfileController;
use App\Http\Controllers\EndUser\RequestController;
use App\Http\Controllers\EndUser\ShowRoomController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function(){
    Route::get('/' , [DashboardController::class , 'index'])->middleware(['auth:admin'])->name('index');
});


