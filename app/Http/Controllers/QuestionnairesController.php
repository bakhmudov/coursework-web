<?php

namespace App\Http\Controllers;

use App\Models\Questionnaire;
use Illuminate\Http\Request;

class QuestionnairesController extends Controller
{
    public function index() {
        $questionnaires = Questionnaire::all();
        return view('questionnaire.index', compact('questionnaires'));
    }

    public function create() {
        return view('questionnaire.create');
    }

    public function store() {
        $data = request()->validate([
            'name' => '',
            'surname' => '',
            'patronymic' => '',
            'birthday' => '',
            'secondary_school' => '',
            'secschool_enddate' => '',
            'honors' => '',
            'address' => '',
            'phone_number' => '',
            'specialty_code' => '',
        ]);
        Questionnaire::create($data);
        return redirect()->route('questionnaire.index');
    }

    public function show(Questionnaire $questionnaire) {
        return view('questionnaire.show', compact('questionnaire'));
    }

    public function edit(Questionnaire $questionnaire) {
        return view('questionnaire.edit', compact('questionnaire'));
    }

    public function update(Questionnaire $questionnaire) {
        $data = request()->validate([
            'name' => '',
            'surname' => '',
            'patronymic' => '',
            'birthday' => '',
            'secondary_school' => '',
            'secschool_enddate' => '',
            'honors' => '',
            'address' => '',
            'phone_number' => '',
            'specialty_code' => '',
        ]);
        $questionnaire->update($data);
        return redirect()->route('questionnaire.show', $questionnaire->id);
    }

    public function destroy(Questionnaire $questionnaire) {
        $questionnaire->delete();
        return redirect()->route('questionnaire.index');
    }
}
