<?php

namespace App\Http\Controllers;

use App\Models\Questionnaires;
use Illuminate\Http\Request;

class QuestionnairesController extends Controller
{
    public function index() {
        return view('questionnaire');
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