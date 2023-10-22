<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TapController;
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

Route::get('tap-payment', [TapController::class,'form'])->name('tap.form');
Route::post('tap-payment', [TapController::class,'payment'])->name('tap.payment');
Route::any('tap-callback',[TapController::class,'callback'])->name('tap.callback');
