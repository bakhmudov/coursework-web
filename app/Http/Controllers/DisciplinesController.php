<?php

namespace App\Http\Controllers;

use App\Models\Discipline;
use Illuminate\Http\Request;

class DisciplinesController extends Controller
{
    public function index() {
        $disciplines = Discipline::all();
        return view('discipline.index', compact('disciplines'));
    }

    public function create() {
        return view('discipline.create');
    }

    public function store() {
        $data = request()->validate([
            'title' => '',
        ]);

        Discipline::create($data);
        return redirect()->route('discipline.index');
    }

    public function show(Discipline $discipline) {
        return view('discipline.show', compact('discipline'));
    }

    public function edit(Discipline $discipline) {
        return view('discipline.edit', compact('discipline'));
    }

    public function update(Discipline $discipline) {
        $data = request()->validate([
            'title' => '',
        ]);

        $discipline->update($data);
        return redirect()->route('discipline.index', $discipline->id);
    }

    public function destroy(Discipline $discipline) {
        $discipline->delete();
        return redirect()->route('discipline.index');
    }
}
