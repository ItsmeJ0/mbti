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
            'p16' => 0.25,
            'p20' => 0.25,
            'p21' => 0.5,
            'p22' => 1,
            'p23' => 1,
            'p24' => 0.75,
            'p25' => 1,
            'p26' => 1,
            'p27' => 0.75,
            'p28' => 0.5,
        ];

        $totalJawaban = 0;
        $totalNilai = 0;

        foreach ($betaNodeS as $id => $value) {
            if (isset($bobotSoalS[$id]) && is_numeric($value)) {
                $bobot = $bobotSoalS[$id];
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
        $hasilReteS = $totalNilai ? ($totalJawaban / $totalNilai) : 0;
        // dd($hasilReteE);
        // dd($hasilReteS);
        return $hasilReteS;
    }
}
