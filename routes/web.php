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

    # User
    Route::resource('user', UserController::class);
    Route::get('user-datatable', [UserController::class, 'datatable'])->name('user.datatable');
    Route::get('user-select2-district', [UserController::class, 'select2_district'])->name('user.select2-district');

    # Profile
    Route::resource('profile', ProfileController::class);

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
