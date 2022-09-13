<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TatananOneController;
use App\Http\Controllers\TatananTwoController;
use App\Http\Controllers\TatananThreeController;
use App\Http\Controllers\TatananFourController;
use App\Http\Controllers\TatananFiveController;
use App\Http\Controllers\TatananSixController;
use App\Http\Controllers\TatananSevenController;
use App\Http\Controllers\TatananEightController;
use App\Http\Controllers\TatananNineController;
use Illuminate\Support\Facades\Route;


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

Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');

Route::resource('tatanan-satu', TatananOneController::class);
Route::resource('tatanan-dua', TatananTwoController::class);
Route::resource('tatanan-tiga', TatananThreeController::class);
Route::resource('tatanan-empat', TatananFourController::class);
Route::resource('tatanan-lima', TatananFiveController::class);
Route::resource('tatanan-enam', TatananSixController::class);
Route::resource('tatanan-tujuh', TatananSevenController::class);
Route::resource('tatanan-delapan', TatananEightController::class);
Route::resource('tatanan-sembilan', TatananNineController::class);
