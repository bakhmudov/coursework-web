<?php

namespace App\Http\Controllers;

use App\Models\Discipline;
use App\Models\Exam;
use App\Models\Questionnaire;
use Illuminate\Http\Request;

class EntryExamsController extends Controller
{
    public function index() {
        $exams = Exam::all();
        return view('exam.index', compact('exams'));
    }

    public function create() {
        $questionnaires = Questionnaire::all();
        $disciplines = Discipline::all();
        return view('exam.create', compact('questionnaires', 'disciplines'));
    }

    public function store() {
        $data = request()->validate([
            'title' => '',
        ]);

        Exam::create($data);
        return redirect()->route('exam.index');
    }

    public function show(Exam $exams) {
        return view('exams.show', compact('exams'));
    }

    public function edit(Exam $exams) {
        $questionnaires = Questionnaire::all();
        $disciplines = Discipline::all();
        return view('exams.edit', compact('exams', 'questionnaires', 'disciplines'));
    }

    public function update(Exam $exams) {
        $data = request()->validate([
            'title' => '',
        ]);

        $exams->update($data);
        return redirect()->route('exam.index', $exams->id);
    }

    public function destroy(Exam $exams) {
        $exams->delete();
        return redirect()->route('exam.index');
    }
}
