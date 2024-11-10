<?php

use App\Http\Controllers\DisplayAnswerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// ==========================================================================================================================================
//  Admin Controls

Route::get('admin/dashboard',[HomeController::class,'adminIndex'])->middleware(['auth','admin'])->name('adminDashboard');

Route::get('dashboard',[HomeController::class,'userIndex'])->name('dashboard');

Route::get('contestDetails',[HomeController::class,'showContestDetails'])->middleware(['auth','admin']);

Route::post('score',[HomeController::class,'saveUserScores'])->middleware(['auth','admin']);

Route::get('RoundOneQuestions',[HomeController::class,'viewRoundOne'])->middleware(['auth','admin']);

Route::get('RoundTwoQuestions',[HomeController::class,'viewRoundTwo'])->middleware(['auth','admin']);

Route::get('showRoundTwoAnswer',[DisplayAnswerController::class,'showRoundTwoResponse'])->middleware(['auth','admin']);

Route::get('showRoundOneAnswer',[DisplayAnswerController::class,'showRoundOneResponse'])->middleware(['auth','admin']);

// ==========================================================================================================================================

// Question Controller

Route::get('admin/questions/create',[QuestionController::class,'create'])->middleware(['auth','admin'])->name('questions.create');


Route::post('admin/questions',[QuestionController::class,'submitAnswer'])->middleware(['auth','admin'])->name('questions.store');


Route::get('admin/questionsTwo/create',[QuestionController::class,'createRoundTwoQuestion'])->middleware(['auth','admin'])->name('roundTwo.create');


Route::post('admin/questionsTwo/store',[QuestionController::class,'roundTwoStore'])->middleware(['auth','admin'])->name('questionsTwo.store');

// ==========================================================================================================================================

// Controller for students
Route::get('round-one-questions',[StudentController::class,'indexOne'])->name('roundOne.questions')->middleware(['auth']);


Route::post('submitAnswer/roundOne',[StudentController::class,'storeAnswerRoundOne'])->name('submit.answers.roundOne')->middleware(['auth']);


Route::get('round-two-questions',[StudentController::class,'indexTwo'])->name('roundTwo.questions')->middleware(['auth']);

Route::post('submitAnswer/roundTwo',[StudentController::class,'storeAnswerRoundTwo'])->name('submit.answers.roundTwo')->middleware(['auth']);

Route::get('round-two-questions',[StudentController::class,'indexTwo'])->name('roundOne.questions');
require __DIR__.'/auth.php';
