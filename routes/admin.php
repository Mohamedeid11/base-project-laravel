<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EndUser\Auth\RegisterController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\CarModelController;
use App\Http\Controllers\Admin\CarPlateController;
use App\Http\Controllers\Admin\CarTypeController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\FeatureOptionController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PushNotificationController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\ReportOptionController;
use App\Http\Controllers\Admin\RequestController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ShowRoomController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\PaymentController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:admin')->group(function(){
    Auth::routes(['register' => false]);
});

Route::middleware('auth:admin')->group(function(){

    Route::get('/' , [DashboardController::class , 'index'])->name('index');
    Route::resource('/city' , CityController::class);
    Route::resource('/color' , ColorController::class);
    Route::resource('/district' , DistrictController::class);
    Route::resource('/role', RoleController::class);
    Route::resource('/admin', AdminController::class);
    Route::resource('/user', UserController::class);
    Route::post('update-password/{user}', [UserController::class ,'updatePassword'])->name('password.update');

    Route::get('/user/block/{user}',[ UserController::class  , 'blocked'] )->name('block.user');
    Route::resource('contact' , ContactController::class);

    /************************************* Notifications *********************************************************/

    Route::resource('push_notification' ,  PushNotificationController::class);

    /************************************* Payment *********************************************************/

    //pages
    Route::get('pages/{page}' , [PageController::class , 'index'])->name('pages.index');
    Route::put('pages/{page}' , [PageController::class , 'update'])->name('pages.update');
    Route::resource('/slider' , SliderController::class );

    /************************************ setting ************************************************/
    Route::controller(SettingController::class)->group(function () {
        Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {
            //home
            Route::get('/setting-home',  'homeForm')->name('form.home');
            Route::post('/setting-home',  'updateHome')->name('update.home');
            //social
            Route::get('/setting-social',  'socialForm')->name('form.social');
            Route::post('/setting-social',  'updateSocial')->name('update.social');
            //Features
            Route::get('/setting-feature',  'FeatureForm')->name('form.feature');
            Route::post('/setting-feature',  'updateFeature')->name('update.feature');
        });
    });
    /************************************ setting ************************************************/
    Route::post('/logout', [LoginController::class , 'logout' ])->name('logout');

});

Route::post('/user/fcm-token', [UserController::class  , 'updateToken'])->name('user.fcmToken');
Route::get('verify-user-email/{user}', [SettingController::class, 'userEmailVerification'])->name('userEmailVerification');
Route::get('verify-showroom-email/{showroom}', [SettingController::class, 'showroomEmailVerification'])->name('showroomEmailVerification');
Route::get('payment_status', [SettingController::class, 'paymentStatus'])->name('payment.status');



