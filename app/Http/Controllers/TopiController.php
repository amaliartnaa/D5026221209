<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopiController extends Controller
{
    public function topi () {
        $topi = DB::table('topi');

        return view('topi', ['topi' => $topi]);
    }

    public function store(Request $request) {
        DB::table('topi')->insert([
            'topi_kode' => $request->kode,
            'topi_merk' => $request->merk,
            'topi_stock' => $request->stock,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/topi');
    }
}
