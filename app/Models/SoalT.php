<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalT extends Model
{
    use HasFactory;
    protected $table = 'soal_t';
    public static function ProsesJawabanT($betaNodeT)
    {
        $bobotSoalT = [ // Bobot Soal (Alpha Nodes)
            'p29'=> 1,
            'p30'=> 1,
            'p31'=> 1,
            'p32'=> 1,
            'p33'=> 1,
            'p34'=> 0.75,
            'p35'=> 0.5,
        ];

        $totalJawaban = 0;
        $totalBobotJawaban  = 0;

        foreach ($betaNodeT as $id => $value) {
            if (isset($bobotSoalT[$id])) { // Pastikan soal ada di daftar bobot
                $bobot = $bobotSoalT[$id];
                $hasil = $bobot * $value;
                $totalBobotJawaban  += $value;
                $totalJawaban += $hasil;
            }
        }

        // Hitung hasil Rete I
        $hasilReteT = $totalBobotJawaban  ? ($totalJawaban / $totalBobotJawaban ) : 0;

        // dd($hasilReteT);
        return $hasilReteT;
    }
}
