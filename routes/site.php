<?php

use Illuminate\Support\Facades\Route;
use MichelCalisto\Site\Http\Controllers\SiteController;
use MichelCalisto\Site\Http\Controllers\SliderController;
use MichelCalisto\Site\Http\Controllers\PublicationController;

/*
|--------------------------------------------------------------------------
| Site Routes
|--------------------------------------------------------------------------
|
| Here is where you can register site routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth:sanctum', 'verified'])->resource('/sites', SiteController::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('/sites/{site}/sliders', SliderController::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('/sites/{site}/publications', PublicationController::class);