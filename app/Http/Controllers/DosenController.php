<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $a = 3;
        $b = 7;
        $c = $a * $b;
        return "<h1>Hasil perkalian = " . (string)$c . "</h1>";

        // tanda . adalah concat
    }

    public function showBlog() {
        $nama = "Amel";
        $alamat = "Surabaya";
        $umur = 19;
        return view('blog', ['nama' => $nama, 'alamat' => $alamat, 'umur' => $umur]);
    }

    public function shownama($nama) {
        return "Anda telah mengisikan : " . $nama;
    }

    
}
