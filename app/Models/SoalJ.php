<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalJ extends Model
{
    use HasFactory;
    protected $table = 'soal_j';
    public static function ProsesJawabanJ($betaNodeJ)
    {
        $bobotSoalJ = [ // Bobot Soal (Alpha Nodes)
            'p43' => 1,
            'p44' => 1,
            'p45' => 0.5,
            'p46' => 0.75,
            'p47' => 0.75,
            'p48' => 0.5,
            'p49' => 0.25,
            'p53' => 0.25,
        ];

        $totalJawaban = 0;
        $totalNilai = 0;

        foreach ($betaNodeJ as $id => $value) {
            if (isset($bobotSoalJ[$id]) && is_numeric($value)) {
                $bobot = $bobotSoalJ[$id];
                $nilai = floatval($value);

                // Validasi: pastikan nilai dalam rentang -0.4 sampai 0.4
                if ($nilai < -0.4 || $nilai > 0.4) {
                    continue;
                }

                $totalJawaban += $bobot * $nilai;
                $totalNilai += abs($nilai); // agar pembaginya aman
            }
        }

        $hasilReteJ = $totalNilai ? ($totalJawaban / $totalNilai) : 0;

        
        return $hasilReteJ;
    }
}
