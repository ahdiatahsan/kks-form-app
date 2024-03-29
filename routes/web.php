<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\InstitutionalBuilderController;
use App\Http\Controllers\InstitutionalKksController;
use App\Http\Controllers\InstitutionalDistrictController;
use App\Http\Controllers\InstitutionalVillageController;
use App\Http\Controllers\FundingController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProfileController;
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
use App\Http\Controllers\NoteEightController;
use App\Http\Controllers\NoteFiveController;
use App\Http\Controllers\NoteFourController;
use App\Http\Controllers\NoteNineController;
use App\Http\Controllers\NoteOneController;
use App\Http\Controllers\NoteSevenController;
use App\Http\Controllers\NoteSixController;
use App\Http\Controllers\NoteThreeController;
use App\Http\Controllers\NoteTwoController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
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

//public
Route::get('/', [PublicController::class, 'index'])->name('landing');

//administrator
Route::group(['middleware' => ['auth','prevent-back-history']], function () {
    # Single Page
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');
    Route::get('/institutionalMenu', [DashboardController::class, 'institutional_menu'])->name('institutional-menu');
    Route::get('/specialIndicator', [DashboardController::class, 'tatanan_menu'])->name('tatanan-menu');
    Route::get('/specialIndicatorNote', [DashboardController::class, 'note_menu'])->name('note-menu');

    # Introduction
    Route::resource('introduction', IntroductionController::class);
    Route::get('introduction-datatable', [IntroductionController::class, 'datatable'])->name('introduction.datatable');
    Route::get('introduction-select2-period', [IntroductionController::class, 'select2_period'])->name('introduction.select2-period');

    # Conclusion
    Route::resource('conclusion', ConclusionController::class);
    Route::get('conclusion-datatable', [ConclusionController::class, 'datatable'])->name('conclusion.datatable');
    Route::get('conclusion-select2-period', [ConclusionController::class, 'select2_period'])->name('conclusion.select2-period');

    # Funding
    Route::resource('funding', FundingController::class);
    Route::get('funding-datatable', [FundingController::class, 'datatable'])->name('funding.datatable');
    Route::get('funding-select2-period', [FundingController::class, 'select2_period'])->name('funding.select2-period');

    # Institutional Builder
    Route::resource('institutionalBuilder', InstitutionalBuilderController::class);
    Route::get('institutionalBuilder-datatable', [InstitutionalBuilderController::class, 'datatable'])->name('builder.datatable');
    Route::get('institutionalBuilder-select2-period', [InstitutionalBuilderController::class, 'select2_period'])->name('builder.select2-period');

    # Institutional Kks
    Route::resource('institutionalKks', InstitutionalKksController::class)->parameters(['institutionalKks' => 'institutionalKks']);
    Route::get('institutionalKks-datatable', [InstitutionalKksController::class, 'datatable'])->name('kks.datatable');
    Route::get('institutionalKks-select2-period', [InstitutionalKksController::class, 'select2_period'])->name('kks.select2-period');

    # Institutional District
    Route::resource('institutionalDistrict', InstitutionalDistrictController::class);
    Route::get('institutionalDistrict-datatable', [InstitutionalDistrictController::class, 'datatable'])->name('district.datatable');
    Route::get('institutionalDistrict-select2-period', [InstitutionalDistrictController::class, 'select2_period'])->name('district.select2-period');

    # Institutional Village
    Route::resource('institutionalVillage', InstitutionalVillageController::class);
    Route::get('institutionalVillage-datatable', [InstitutionalVillageController::class, 'datatable'])->name('village.datatable');
    Route::get('institutionalVillage-select2-period', [InstitutionalVillageController::class, 'select2_period'])->name('village.select2-period');

    # User
    Route::resource('user', UserController::class);
    Route::get('user-datatable', [UserController::class, 'datatable'])->name('user.datatable');
    Route::get('user-select2-district', [UserController::class, 'select2_district'])->name('user.select2-district');

    # Profile
    Route::resource('profile', ProfileController::class);

    # Setting
    Route::resource('setting', SettingController::class);
    Route::get('setting-datatable', [SettingController::class, 'datatable'])->name('setting.datatable');

    # Special Indicator
    Route::resource('tatananOne', TatananOneController::class);
    Route::get('tatananOne-filter', [TatananOneController::class, 'tatanan_filter'])->name('tatananOne.filter');

    Route::resource('tatananTwo', TatananTwoController::class);
    Route::get('tatananTwo-filter', [TatananTwoController::class, 'tatanan_filter'])->name('tatananTwo.filter');

    Route::resource('tatananThree', TatananThreeController::class);
    Route::get('tatananThree-filter', [TatananThreeController::class, 'tatanan_filter'])->name('tatananThree.filter');

    Route::resource('tatananFour', TatananFourController::class);
    Route::get('tatananFour-filter', [TatananFourController::class, 'tatanan_filter'])->name('tatananFour.filter');

    Route::resource('tatananFive', TatananFiveController::class);
    Route::get('tatananFive-filter', [TatananFiveController::class, 'tatanan_filter'])->name('tatananFive.filter');

    Route::resource('tatananSix', TatananSixController::class);
    Route::get('tatananSix-filter', [TatananSixController::class, 'tatanan_filter'])->name('tatananSix.filter');

    Route::resource('tatananSeven', TatananSevenController::class);
    Route::get('tatananSeven-filter', [TatananSevenController::class, 'tatanan_filter'])->name('tatananSeven.filter');

    Route::resource('tatananEight', TatananEightController::class);
    Route::get('tatananEight-filter', [TatananEightController::class, 'tatanan_filter'])->name('tatananEight.filter');

    Route::resource('tatananNine', TatananNineController::class);
    Route::get('tatananNine-filter', [TatananNineController::class, 'tatanan_filter'])->name('tatananNine.filter');

    # Special Indicator Note
    Route::resource('noteOne', NoteOneController::class);
    Route::get('noteOne-datatable', [NoteOneController::class, 'datatable'])->name('noteOne.datatable');

    Route::resource('noteTwo', NoteTwoController::class);
    Route::get('noteTwo-datatable', [NoteTwoController::class, 'datatable'])->name('noteTwo.datatable');

    Route::resource('noteThree', NoteThreeController::class);
    Route::get('noteThree-datatable', [NoteThreeController::class, 'datatable'])->name('noteThree.datatable');

    Route::resource('noteFour', NoteFourController::class);
    Route::get('noteFour-datatable', [NoteFourController::class, 'datatable'])->name('noteFour.datatable');

    Route::resource('noteFive', NoteFiveController::class);
    Route::get('noteFive-datatable', [NoteFiveController::class, 'datatable'])->name('noteFive.datatable');

    Route::resource('noteSix', NoteSixController::class);
    Route::get('noteSix-datatable', [NoteSixController::class, 'datatable'])->name('noteSix.datatable');

    Route::resource('noteSeven', NoteSevenController::class);
    Route::get('noteSeven-datatable', [NoteSevenController::class, 'datatable'])->name('noteSeven.datatable');

    Route::resource('noteEight', NoteEightController::class);
    Route::get('noteEight-datatable', [NoteEightController::class, 'datatable'])->name('noteEight.datatable');

    Route::resource('noteNine', NoteNineController::class);
    Route::get('noteNine-datatable', [NoteNineController::class, 'datatable'])->name('noteNine.datatable');
});
