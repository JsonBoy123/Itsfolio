<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FeatureController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CaseController;
use Illuminate\Auth\Events\Login;

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

Route::get('/feature', [FeatureController::class, 'index']);
Route::get('/pricing', [PricingController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/usecase', [CaseController::class, 'index']);



