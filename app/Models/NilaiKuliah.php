<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiKuliah extends Model
{
    use HasFactory;

    protected $table = 'nilai_kuliah';

    protected $fillable = ['nrp', 'nilai_angka', 'sks'];

    protected $appends = ['nilai_huruf', 'bobot'];

    public function getNilaiHurufAttribute() {
        $nilaiAngka = $this->attributes['nilai_angka'];
        if($nilaiAngka <= 40) {
            return 'D';
        } elseif($nilaiAngka <= 60) {
            return 'C';
        } elseif($nilaiAngka <= 80) {
            return 'B';
        } else {
            return 'A';
        }
    }

    public function getBobotAttribute() {
        return $this->attributes['nilai_angka'] * $this->attributes['sks'];
    }
}
