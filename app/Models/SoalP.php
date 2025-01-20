<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalP extends Model
{
    use HasFactory;
    protected $table = 'soal_p';
    public static function ProsesJawabanP($betaNodeP)
    {
        $bobotSoalP = [ // Bobot Soal (Alpha Nodes)
            'p43'=> 1,
            'p44'=> 1,
            'p45'=> 0.5,
            'p46'=> 0.75,
            'p47'=> 0.75,
            'p48'=> 0.5,
            'p49'=> 0.25,
            'p53'=> 0.25,
        ];

        $totalJawaban = 0;
        $totalBobotJawaban  = 0;

        foreach ($betaNodeP as $id => $value) {
            if (isset($bobotSoalP[$id])) { // Pastikan soal ada di daftar bobot
                $bobot = $bobotSoalP[$id];
                $hasil = $bobot * $value;
                $totalBobotJawaban  += $value;
                $totalJawaban += $hasil;
            }
        }

        // Hitung hasil Rete I
        $hasilReteP = $totalBobotJawaban  ? ($totalJawaban / $totalBobotJawaban ) : 0;

        // dd($hasilReteP);
        return $hasilReteP;
    }
}
