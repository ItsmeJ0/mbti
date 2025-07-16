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
        $totalNilai = 0;

        foreach ($betaNodeF as $id => $value) {
            if (isset($bobotSoalF[$id]) && is_numeric($value)) {
                $bobot = $bobotSoalF[$id];
                $nilai = floatval($value);

                // Validasi: pastikan nilai dalam rentang -0.4 sampai 0.4
                if ($nilai < -0.4 || $nilai > 0.4) {
                    continue;
                }

                $totalJawaban += $bobot * $nilai;
                $totalNilai += abs($nilai); // agar pembaginya aman
            }
        }

        // Hitung hasil Rete E
        $hasilReteF = $totalNilai ? ($totalJawaban / $totalNilai) : 0;
        // dd($hasilReteE);
        // dd($hasilReteF);
        return $hasilReteF;
    }
}
