<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\InstitutionalBuilderController;
use App\Http\Controllers\InstitutionalKksController;
use App\Http\Controllers\InstitutionalDistrictController;
use App\Http\Controllers\InstitutionalVillageController;
use App\Http\Controllers\FundingController;
use App\Http\Controllers\TatananMainController;
use App\Http\Controllers\TatananNoteController;
use App\Http\Controllers\TatananOneController;
use App\Http\Controllers\TatananTwoController;
use App\Http\Controllers\TatananThreeController;
use App\Http\Controllers\TatananFourController;
use App\Http\Controllers\TatananFiveController;
use App\Http\Controllers\TatananSixController;
use App\Http\Controllers\TatananSevenController;
use App\Http\Controllers\TatananEightController;
use App\Http\Controllers\TatananNineController;
use App\Http\Controllers\ConclusionController;
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

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::get('/specialIndicator', [DashboardController::class, 'tatanan_menu'])->name('tatanan-menu');
Route::get('/institutionalMenu', [DashboardController::class, 'institutional_menu'])->name('institutional-menu');

Route::resource('introduction', IntroductionController::class);
Route::resource('funding', FundingController::class);
Route::resource('conclusion', ConclusionController::class);

Route::resource('institutionalBuilder', InstitutionalBuilderController::class);
Route::resource('institutionalKks', InstitutionalKksController::class);
Route::resource('institutionalDistrict', InstitutionalDistrictController::class);
Route::resource('institutionalVillage', InstitutionalVillageController::class);

Route::resource('tatananMain', TatananMainController::class);
Route::resource('tatananNote', TatananNoteController::class);
Route::resource('tatananOne', TatananOneController::class);
Route::resource('tatananTwo', TatananTwoController::class);
Route::resource('tatananThree', TatananThreeController::class);
Route::resource('tatananFour', TatananFourController::class);
Route::resource('tatananFive', TatananFiveController::class);
Route::resource('tatananSix', TatananSixController::class);
Route::resource('tatananSeven', TatananSevenController::class);
Route::resource('tatananEight', TatananEightController::class);
Route::resource('tatananNine', TatananNineController::class);
