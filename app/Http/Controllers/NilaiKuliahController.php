<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiKuliahController extends Controller
{
    // public function index() {
    //     $data = NilaiKuliah::paginate(10);
    //     return view('nilai_kuliah/index', ['data' => $data]);
    // }

    // public function create() {
    //     return view('nilai_kuliah/create');
    // }

    // public function store(Request $request) {
    //     NilaiKuliah::create($request->all());
    //     return redirect()->route('nilai.index');
    // }

    // public function view($id) {
    //     $nilai = NilaiKuliah::findOrFail($id);
    //     return view('nilai.show', compact('nilai'));
    // }

    // public function edit($id) {
    //     $data = NilaiKuliah::findOrFail($id);
    //     return view('nilai_kuliah/edit', compact('data'));
    // }

    // public function update(Request $request, $id) {
    //     $nilai = NilaiKuliah::findOrFail($id);
    //     $nilai->update($request->all());
    //     return redirect()->route('nilai.index');
    // }

    // public function hapus($id) {
    //     $nilai = NilaiKuliah::findOrFail($id);
    //     $nilai->delete();
    //     return redirect()->route('nilai.index');
    // }

    public function index()
    {
        // $pegawai = DB::table('pegawai')->get();
        $data = DB::table('nilai_kuliah')->paginate(10);


        return view('nilai_kuliah/index', ['data' => $data]); 
    }

    public function create() {
        return view('nilai_kuliah/create');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$data = DB::table('nilai_kuliah')
		->where('nrp','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('nilai_kuliah/index' ,['data' => $data]);

	}

    public function store(Request $request) {
        DB::table('nilai_kuliah')->insert([
            'nrp' => $request->nrp,
            'nilai_angka' => $request->nilai_angka,
            'sks' => $request->sks,
        ]);

        return redirect('/nilai');
    }

    public function edit($id) {
        $data = DB::table('nilai_kuliah')->where('id', $id)->get();

        return view('nilai_kuliah/edit',['data' => $data]);
    }

    public function update(Request $request) {
        DB::table('nilai_kuliah')->where('id', $request->id)->update([
            'nrp' => $request->nrp,
			'nilai_angka' => $request->nilai_angka,
			'sks' => $request->sks,
        ]);

        return redirect('/nilai');
    }

    public function hapus($id) {
        DB::table('nilai_kuliah')->where('id',$id)->delete();

        return redirect('/nilai');
    }

    public function view($id) {
        $data = DB::table('nilai_kuliah')->where('id', $id)->get();

        return view('nilai_kuliah/view', ['data' => $data]);
    }
}
