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

    public function store(Request $request) {
        DB::table('topi')->insert([
            'merk_topi' => $request->merk,
            'stock_topi' => $request->stock,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/topi');
    }
}
