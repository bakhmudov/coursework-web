<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionnairesController;
use App\Http\Controllers\SpecialtiesController;
use App\Http\Controllers\DisciplinesController;
use App\Http\Controllers\EntryExamsController;

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
    return view('home');
});
Route::get('/questionnaires', [QuestionnairesController::class, 'index'])->name('questionnaire.index');
Route::get('/questionnaires/create', [QuestionnairesController::class, 'create'])->name('questionnaire.create');
Route::post('/questionnaires', [QuestionnairesController::class, 'store'])->name('questionnaire.store');
Route::get('/questionnaires/{questionnaire}', [QuestionnairesController::class, 'show'])->name('questionnaire.show');
Route::get('/questionnaires/{questionnaire}/edit', [QuestionnairesController::class, 'edit'])->name('questionnaire.edit');
Route::patch('/questionnaires/{questionnaire}', [QuestionnairesController::class, 'update'])->name('questionnaire.update');
Route::delete('/questionnaires/{questionnaire}', [QuestionnairesController::class, 'destroy'])->name('questionnaire.delete');

Route::get('/specialties', [SpecialtiesController::class, 'index'])->name('specialty.index');
Route::get('/specialties/create', [SpecialtiesController::class, 'create'])->name('specialty.create');
Route::post('/specialties', [SpecialtiesController::class, 'store'])->name('specialty.store');
Route::get('/specialties/{specialty}', [SpecialtiesController::class, 'show'])->name('specialty.show');
Route::get('/specialties/{specialty}/edit', [SpecialtiesController::class, 'edit'])->name('specialty.edit');
Route::patch('/specialties/{specialty}', [SpecialtiesController::class, 'update'])->name('specialty.update');
Route::delete('/specialties/{specialty}', [SpecialtiesController::class, 'destroy'])->name('specialty.delete');

Route::get('/disciplines', [DisciplinesController::class, 'index'])->name('discipline.index');
Route::get('/disciplines/create', [DisciplinesController::class, 'create'])->name('discipline.create');
Route::post('/disciplines', [DisciplinesController::class, 'store'])->name('discipline.store');
Route::get('/disciplines/{discipline}', [DisciplinesController::class, 'show'])->name('discipline.show');
Route::get('/disciplines/{discipline}/edit', [DisciplinesController::class, 'edit'])->name('discipline.edit');
Route::patch('/disciplines/{discipline}', [DisciplinesController::class, 'update'])->name('discipline.update');
Route::delete('/disciplines/{discipline}', [DisciplinesController::class, 'destroy'])->name('discipline.delete');

Route::get('/entry_exams', [EntryExamsController::class, 'index'])->name('entry_exams.index');
Route::get('/entry_exams/create', [EntryExamsController::class, 'create'])->name('entry_exams.create');
Route::post('/entry_exams', [EntryExamsController::class, 'store'])->name('entry_exams.store');
Route::get('/entry_exams/{questionnaire}', [EntryExamsController::class, 'show'])->name('entry_exams.show');
Route::get('/entry_exams/{questionnaire}/edit', [EntryExamsController::class, 'edit'])->name('entry_exams.edit');
Route::patch('/entry_exams/{questionnaire}', [EntryExamsController::class, 'update'])->name('entry_exams.update');
Route::delete('/entry_exams/{questionnaire}', [EntryExamsController::class, 'destroy'])->name('entry_exams.delete');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
