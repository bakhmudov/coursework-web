<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionnairesController;

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

Route::get('/specialties', [QuestionnairesController::class, 'index']);

Route::get('/disciplines', [QuestionnairesController::class, 'index']);

Route::get('/entry_exams', [QuestionnairesController::class, 'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
