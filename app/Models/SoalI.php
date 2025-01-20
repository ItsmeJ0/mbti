<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalI extends Model
{
    use HasFactory;
    protected $table = 'soal_i';
    public static function ProsesJawabanI($betaNodeI)
    {
        $bobotSoalI = [ // Bobot Soal (Alpha Nodes)
            'p1' => 0.75,
            'p2' => 1,
            'p3' => 1,
            'p4' => 0.75,
            'p5' => 0.5,
            'p6' => 1,
            'p7' => 0.5,
            'p8' => 0.25,
            'p10' => 0.25,
            'p12' => 0.5,
            'p14' => 0.25,
        ];

        $totalJawaban = 0;
        $totalBobotJawaban  = 0;

        foreach ($betaNodeI as $id => $value) {
            if (isset($bobotSoalI[$id])) { // Pastikan soal ada di daftar bobot
                $bobot = $bobotSoalI[$id];
                $hasil = $bobot * $value;
                $totalBobotJawaban  += $value;
                $totalJawaban += $hasil;
            }
        }

        // Hitung hasil Rete I
        $hasilReteI = $totalBobotJawaban  ? ($totalJawaban / $totalBobotJawaban ) : 0;

        // dd($hasilReteI);
        return $hasilReteI;
    }
}
