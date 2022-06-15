<?php

use App\Http\Controllers\Tutors\SubjectController;
use App\Http\Controllers\Tutors\SubjectsController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Tutors\TutorsController;
use App\Http\Controllers\Tutors\TutorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    Route::get('edit/{id}', [TutorController::class, 'getEditView'])->name('getEditView');

    Route::post('edit/{id}', [TutorController::class, 'edit'])->name('edit');

    Route::group(['prefix' => '/subjects/', 'as' => 'subjects.'], function () {
        Route::get('list', [SubjectsController::class, 'list'])->name('list');

        Route::get('create', [SubjectController::class, 'getCreateView'])->name('getCreateView');

        Route::post('create', [SubjectController::class, 'create'])->name('create');

        Route::get('show/{id}', [SubjectController::class, 'show'])->name('show');

        Route::post('destroy/{id}', [SubjectController::class, 'destroy'])->name('destroy');
    });
});

Route::get('mail/{id}', [TutorController::class, 'mail'])->name('mail');

Route::post('/mail/{id}', function (Request $request) {
    $content = $request->content;
    $email = $request->email;
    Mail::raw($content, function ($message) {
        $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        $message->to('prukioksi@gmail.com', 'User Name');
    });
    return redirect()->route('tutors.list');
})->name('sendmail');

Route::get('/', function () {
    return view('home');
});
