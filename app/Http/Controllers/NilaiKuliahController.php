<?php

namespace App\Http\Controllers;

use App\Models\NilaiKuliah;
use Illuminate\Http\Request;

class NilaiKuliahController extends Controller
{
    public function index() {
        $data = NilaiKuliah::all();
        return view('nilai_kuliah/index', compact('data'));
    }

    public function create() {
        return view('nilai_kuliah/create');
    }

    public function store(Request $request) {
        NilaiKuliah::create($request->all());
        return redirect()->route('nilai_kuliah/index');
    }

    public function view($id) {
        $nilai = NilaiKuliah::findOrFail($id);
        return view('nilai.show', compact('nilai'));
    }

    public function edit($id) {
        $nilai = NilaiKuliah::findOrFail($id);
        return view('nilai.edit', compact('nilai'));
    }

    public function update(Request $request, $id) {
        $nilai = NilaiKuliah::findOrFail($id);
        $nilai->update($request->all());
        return redirect()->route('nilai.index');
    }

    public function destroy($id) {
        $nilai = NilaiKuliah::findOrFail($id);
        $nilai->delete();
        return redirect()->route('nilai.index');
    }
}
