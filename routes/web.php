<?php

use App\Http\Controllers\Tutors\SubjectController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Tutors\TutorsController;
use App\Http\Controllers\Tutors\TutorController;


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

Route::group(['prefix' => '/tutors/', 'as' => 'tutors.'], function () {
    Route::get('list', [TutorsController::class, 'list'])->name('list');

    Route::get('show/{id}', [TutorController::class, 'show'])->name('show');

    Route::post('destroy/{id}', [TutorController::class,  'destroy'])->name('destroy');

    Route::get('create', [TutorController::class, 'getCreateView'])->name('getCreateView');

    Route::post('create', [TutorController::class, 'create'])->name('create');

    Route::group(['prefix' => '/subjects/', 'as' => 'subjects.'], function () {
        Route::get('create', [SubjectController::class, 'getCreateView'])->name('getCreateView');

        Route::post('create', [SubjectController::class, 'create'])->name('create');
    });
});

Route::get('/', function () {
    return view('home');
});
