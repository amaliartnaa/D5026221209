<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopiController extends Controller
{
    public function index() {
        $topi = DB::table('topi')->paginate(10);

        return view('topi/index', ['topi' => $topi]);
    }

    public function create() {
        return view('topi/create');
    }

    public function store(Request $request) {
        DB::table('topi')->insert([
            'merk_topi' => $request->merk,
            'stock_topi' => $request->stock,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/topi');
    }

    public function view($id) {
        $topi = DB::table('topi')->where('kode_topi', $id)->get();

        return view('topi/view', ['topi' => $topi]);
    }

    public function edit($id) {
        $topi = DB::table('topi')->where('kode_topi', $id)->get();

        return view('topi/edit', ['topi' => $topi]);
    }

    public function update(Request $request) {
        DB::table('topi')->where('kode_topi', $request->id)->update([
            'merk_topi' => $request->merk,
            'stock_topi' => $request->stock,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/topi');
    }

    public function hapus($id) {
        DB::table('topi')->where('kode_topi', $id)->delete();

        return redirect('/topi'); 
    }
}
