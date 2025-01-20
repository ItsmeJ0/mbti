<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalS extends Model
{
    use HasFactory;
    protected $table = 'soal_s';
    public static function ProsesJawabanS($betaNodeS)
    {
        $bobotSoalS = [ // Bobot Soal (Alpha Nodes)
            'p16'=> 0.25,
            'p20'=> 0.25,
            'p21'=> 0.5,
            'p22'=> 1,
            'p23'=> 1,
            'p24'=> 0.75,
            'p25'=> 1,
            'p26'=> 1,
            'p27'=> 0.75,
            'p28'=> 0.5,
        ];

        $totalJawaban = 0;
        $totalBobotJawaban  = 0;

        foreach ($betaNodeS as $id => $value) {
            if (isset($bobotSoalS[$id])) { // Pastikan soal ada di daftar bobot
                $bobot = $bobotSoalS[$id];
                $hasil = $bobot * $value;
                $totalBobotJawaban  += $value;
                $totalJawaban += $hasil;
            }
        }

        // Hitung hasil Rete I
        $hasilReteS = $totalBobotJawaban  ? ($totalJawaban / $totalBobotJawaban ) : 0;

        // dd($hasilReteS);
        return $hasilReteS;
    }
}
