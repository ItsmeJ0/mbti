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
        $totalNilai = 0;

        foreach ($betaNodeT as $id => $value) {
            if (isset($bobotSoalT[$id]) && is_numeric($value)) {
                $bobot = $bobotSoalT[$id];
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
        $hasilReteT = $totalNilai ? ($totalJawaban / $totalNilai) : 0;
        // dd($hasilReteE);
        // dd($hasilReteT);
        return $hasilReteT;
    }
}
