<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalF extends Model
{
    use HasFactory;
    protected $table = 'soal_f';
    public static function ProsesJawabanF($betaNodeF)
    {
        $bobotSoalF = [ // Bobot Soal (Alpha Nodes)
            'p36'=> 1,
            'p37'=> 1,
            'p38'=> 0.25,
            'p39'=> 0.5,
            'p40'=> 1,
            'p41'=> 1,
            'p42'=> 1,
        ];

        $totalJawaban = 0;
        $totalBobotJawaban  = 0;

        foreach ($betaNodeF as $id => $value) {
            if (isset($bobotSoalF[$id])) { // Pastikan soal ada di daftar bobot
                $bobot = $bobotSoalF[$id];
                $hasil = $bobot * $value;
                $totalBobotJawaban  += $value;
                $totalJawaban += $hasil;
            }
        }

        // Hitung hasil Rete I
        $hasilReteF = $totalBobotJawaban  ? ($totalJawaban / $totalBobotJawaban ) : 0;

        // dd($hasilReteF);
        return $hasilReteF;
    }
}
