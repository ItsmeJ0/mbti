<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalE extends Model
{
    use HasFactory;
    protected $table = 'soal_e';
    public static function ProsesJawabanE($betaNodeE)
    {
        $bobotSoalE = [ // Bobot Soal (Alpha Nodes)
            'p4' => 0.25,
            'p5' => 0.5,
            'p7' => 0.75,
            'p8' => 1,
            'p9' => 1,
            'p10' => 1,
            'p11' => 0.5,
            'p12' => 0.5,
            'p13' => 1,
            'p14' => 1,
        ];

        $totalJawaban = 0;
        $totalBobotJawaban  = 0;

        foreach ($betaNodeE as $id => $value) {
            if (isset($bobotSoalE[$id])) { // Pastikan soal ada di daftar bobot
                $bobot = $bobotSoalE[$id];
                $totalJawaban += $bobot * $value; // Mengakumulasi nilai berbobot
                $totalBobotJawaban  += $value;           // Mengakumulasi total nilai jawaban
            }
        }

        // Hitung hasil Rete E
        $hasilReteE = $totalBobotJawaban  ? ($totalJawaban / $totalBobotJawaban ) : 0;
        // dd($hasilReteE);

        return $hasilReteE;
    }
}
