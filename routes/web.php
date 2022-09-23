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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');
Route::get('/indikator-khusus', [DashboardController::class, 'tatanan_menu'])->name('tatanan-menu');
Route::get('/kelembagaan', [DashboardController::class, 'institutional_menu'])->name('institutional-menu');

Route::resource('pendahuluan', IntroductionController::class);
Route::resource('pendanaan', FundingController::class);
Route::resource('penutup', ConclusionController::class);

Route::resource('tim-pembina', InstitutionalBuilderController::class);
Route::resource('form-kks', InstitutionalKksController::class);
Route::resource('form-kecamatan', InstitutionalDistrictController::class);
Route::resource('form-desa', InstitutionalVillageController::class);

Route::resource('indikator-pokok', TatananMainController::class);
Route::resource('tatanan-catatan', TatananNoteController::class);
Route::resource('tatanan-satu', TatananOneController::class);
Route::resource('tatanan-satu', TatananOneController::class);
Route::resource('tatanan-dua', TatananTwoController::class);
Route::resource('tatanan-tiga', TatananThreeController::class);
Route::resource('tatanan-empat', TatananFourController::class);
Route::resource('tatanan-lima', TatananFiveController::class);
Route::resource('tatanan-enam', TatananSixController::class);
Route::resource('tatanan-tujuh', TatananSevenController::class);
Route::resource('tatanan-delapan', TatananEightController::class);
Route::resource('tatanan-sembilan', TatananNineController::class);
