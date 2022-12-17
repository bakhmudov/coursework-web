<?php

namespace App\Http\Controllers;

use App\Models\Questionnaires;
use Illuminate\Http\Request;

class QuestionnairesController extends Controller
{
    public function index() {
        $questionnaires = Questionnaires::all();
        return view('questionnaire.index', compact('questionnaires'));
    }

    public function create() {
        dd('create page');
    }

    public function update() {
        dd('update page');
    }

    public function delete() {
        dd('delete page');
    }
}
