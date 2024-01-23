<?php

use App\Http\Controllers\AjaxController;
use Illuminate\Support\Facades\Route;


Route::get('get_districts' , [AjaxController::class, 'getDistricts'])->name('get.districts');
Route::get('get_models' , [AjaxController::class, 'getBrandModels'])->name('get.models');
Route::get('get_extension' , [AjaxController::class, 'getBrandModelExtension'])->name('get.extension');



