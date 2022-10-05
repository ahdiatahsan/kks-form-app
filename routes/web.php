<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\InstitutionalBuilderController;
use App\Http\Controllers\InstitutionalKksController;
use App\Http\Controllers\InstitutionalDistrictController;
use App\Http\Controllers\InstitutionalVillageController;
use App\Http\Controllers\FundingController;
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

Route::group(['middleware' => 'prevent-back-history'], function () {
    # Single Page
    Route::get('/', [DashboardController::class, 'index'])->name('home');
    Route::get('/specialIndicator', [DashboardController::class, 'tatanan_menu'])->name('tatanan-menu');
    Route::get('/institutionalMenu', [DashboardController::class, 'institutional_menu'])->name('institutional-menu');

    # Introduction
    Route::resource('introduction', IntroductionController::class);

    # Conclusion
    Route::resource('conclusion', ConclusionController::class);

    # Funding
    Route::resource('funding', FundingController::class);
    Route::get('funding-datatable', [FundingController::class, 'datatable'])->name('funding.datatable');

    # Institutional Builder
    Route::resource('institutionalBuilder', InstitutionalBuilderController::class);
    Route::get('institutionalBuilder-datatable', [InstitutionalBuilderController::class, 'datatable'])->name('builder.datatable');

    # Institutional Kks
    Route::resource('institutionalKks', InstitutionalKksController::class)->parameters(['institutionalKks' => 'institutionalKks']);
    Route::get('institutionalKks-datatable', [InstitutionalKksController::class, 'datatable'])->name('kks.datatable');

    # Institutional District
    Route::resource('institutionalDistrict', InstitutionalDistrictController::class);
    Route::get('institutionalDistrict-datatable', [InstitutionalDistrictController::class, 'datatable'])->name('district.datatable');

    # Institutional Village
    Route::resource('institutionalVillage', InstitutionalVillageController::class);
    Route::get('institutionalVillage-datatable', [InstitutionalVillageController::class, 'datatable'])->name('village.datatable');

    # Special Indicator
    Route::resource('tatananOne', TatananOneController::class);
    Route::resource('tatananTwo', TatananTwoController::class);
    Route::resource('tatananThree', TatananThreeController::class);
    Route::resource('tatananFour', TatananFourController::class);
    Route::resource('tatananFive', TatananFiveController::class);
    Route::resource('tatananSix', TatananSixController::class);
    Route::resource('tatananSeven', TatananSevenController::class);
    Route::resource('tatananEight', TatananEightController::class);
    Route::resource('tatananNine', TatananNineController::class);
});
