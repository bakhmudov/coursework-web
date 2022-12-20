<?php

namespace App\Http\Controllers;

use App\Models\Questionnaire;
use Illuminate\Http\Request;

class SpecialtiesController extends Controller
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
