<?php

use Illuminate\Support\Facades\Route;
use Modules\MediumCompanyModule\App\Http\Controllers\Questions\QuestionsController;

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

Route::group(['middleware' => 'auth'], function () {

    Route::group(['prefix' => 'informationCompany'], function () {
        Route::get('/', [\Modules\MediumCompanyModule\App\Http\Controllers\InformationCompany\InformationCompanyController::class, 'formPage']);
        Route::post('/', [\Modules\MediumCompanyModule\App\Http\Controllers\InformationCompany\InformationCompanyController::class, 'storeForm']);
    });

    Route::group(['prefix' => 'diagnostics/2'], function () {
        Route::get('intro', [QuestionsController::class, 'intro'])->name('diagnostics');
        Route::get('step/1', [QuestionsController::class, 'questions']);
        Route::get('step/2', [QuestionsController::class, 'step2']);

        Route::get('getQuestionsWithCategoryMIDCOM', [QuestionsController::class, 'getQuestionsWithCategory']);
        Route::post('insertAnswerMIDCOM', [QuestionsController::class, 'insertAnswer']);
    });


});
