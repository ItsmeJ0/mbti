<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalN extends Model
{
    use HasFactory;
    protected $table = 'soal_n';

    public static function ProsesJawabanN($betaNodeN)
    {
        $bobotSoalN = [ // Bobot Soal (Alpha Nodes)
            'p15'=> 1,
            'p16'=> 1,
            'p17'=> 1,
            'p18'=> 1,
            'p19'=> 0.25,
            'p20'=> 0.75,
            'p21'=> 0.5,
            'p24'=> 0.25,
            'p27'=> 0.25,
            'p28'=> 0.25,
        ];

        $totalJawaban = 0;
        $totalBobotJawaban  = 0;

        foreach ($betaNodeN as $id => $value) {
            if (isset($bobotSoalN[$id])) { // Pastikan soal ada di daftar bobot
                $bobot = $bobotSoalN[$id];
                $hasil = $bobot * $value;
                $totalBobotJawaban  += $value;
                $totalJawaban += $hasil;
            }
        }

        // Hitung hasil Rete I
        $hasilReteN = $totalBobotJawaban  ? ($totalJawaban / $totalBobotJawaban ) : 0;

        // dd($hasilReteN);
        return $hasilReteN;
    }
}
