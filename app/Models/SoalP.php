<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalP extends Model
{
    use HasFactory;
    protected $table = 'soal_p';
    public static function ProsesJawabanP($betaNode)
    {
        $bobotSoalP = [ // Bobot Soal (Alpha Nodes)
            'p49'=> 1,
            'p50'=> 0.5,
            'p51'=> 0.25,
            'p52'=> 0.75,
            'p53'=> 0.75,
            'p54'=> 0.75,
        ];

        $totalJawaban = 0;
        $totalBobotJawaban  = 0;

        foreach ($betaNode as $id => $value) {
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
