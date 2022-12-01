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
    return view('welcome');
});
Route::get('/questionnaires', [QuestionnairesController::class, 'index']);
Route::get('/questionnaires/create', [QuestionnairesController::class, 'create']);
Route::get('/questionnaires/update', [QuestionnairesController::class, 'update']);
Route::get('/questionnaires/delete', [QuestionnairesController::class, 'delete']);

Route::get('/specialties', [QuestionnairesController::class, 'index']);

Route::get('/disciplines', [QuestionnairesController::class, 'index']);

Route::get('/entry_exams', [QuestionnairesController::class, 'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
