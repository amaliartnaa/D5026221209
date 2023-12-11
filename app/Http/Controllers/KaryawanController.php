<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Mail\Message;


class KaryawanController extends Controller
{
    public function index() {
        $karyawan = DB::table('karyawan')->get();


        return view('karyawan/index', ['karyawan' => $karyawan]); 
    }

    public function tambah() {
        return view('karyawan/tambah');
    }

    public function store(Request $request) {
        $request->validate([
            'kode_pegawai' => ['required', Rule::unique('karyawan')->ignore($request->id, 'kode_pegawai')],
            'nama_lengkap' => 'required',
            'divisi' => 'required',
            'departemen' => 'required',
        ]);
    
        DB::table('karyawan')->insert([
            'kode_pegawai' => $request->kode_pegawai,
            'nama_lengkap' => $request->nama_lengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen,
        ]);
    
        return redirect('/karyawan');
    }

    public function hapus($id) {
        DB::table('karyawan')->where('kode_pegawai',$id)->delete();

        return redirect('/karyawan');
    }
}
