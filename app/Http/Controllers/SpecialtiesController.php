<?php

namespace App\Http\Controllers;

use App\Models\Specialty;
use Illuminate\Http\Request;

class SpecialtiesController extends Controller
{
    public function index() {
        $specialties = Specialty::all();
        return view('specialty.index', compact('specialties'));
    }

    public function create() {
        return view('specialty.create');
    }

    public function store() {
        $data = request()->validate([
            'title' => '',
        ]);

        Specialty::create($data);
        return redirect()->route('specialty.index');
    }

    public function show(Specialty $specialty) {
        return view('specialty.show', compact('specialty'));
    }

    public function edit(Specialty $specialty) {
        return view('specialty.edit', compact('specialty'));
    }

    public function update(Specialty $specialty) {
        $data = request()->validate([
            'title' => '',
        ]);

        $specialty->update($data);
        return redirect()->route('specialty.index', $specialty->id);
    }

    public function destroy(Specialty $specialty) {
        $specialty->delete();
        return redirect()->route('specialty.index');
    }
}
