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
            'p49' => 1,
            'p50' => 0.5,
            'p51' => 0.25,
            'p52' => 0.75,
            'p53' => 0.75,
            'p54' => 0.75,
        ];

        $totalJawaban = 0;
        $totalNilai = 0;

        foreach ($betaNodeP as $id => $value) {
            if (isset($bobotSoalP[$id]) && is_numeric($value)) {
                $bobot = $bobotSoalP[$id];
                $nilai = floatval($value);

                // Validasi: pastikan nilai dalam rentang -0.4 sampai 0.4
                if ($nilai < -0.4 || $nilai > 0.4) {
                    continue;
                }

                $totalJawaban += $bobot * $nilai;
                $totalNilai += abs($nilai); // agar pembaginya aman
            }
        }

        $hasilReteP = $totalNilai ? ($totalJawaban / $totalNilai) : 0;

        // dd($hasilReteP);
        return $hasilReteP;
    }
}
