<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalI extends Model
{
    use HasFactory;
    public static function ProsesJawaban($betaNode, $bobotSoal)
    {
        $totalJawaban = 0;
        $totalNilai = 0;

        foreach ($betaNode as $id => $value) {
            if (isset($bobotSoal[$id]) && is_numeric($value)) {
                $bobot = $bobotSoal[$id];
                $nilai = floatval($value);

                if ($nilai < -0.4 || $nilai > 0.4) {
                    continue;
                }

                $totalJawaban += $bobot * $nilai;
                $totalNilai += abs($nilai);
            }
        }

        return $totalNilai ? ($totalJawaban / $totalNilai) : 0;
    }

    public static function ProsesJawabanIxxx($betaNodeI)
    {
        $bobotSoalI = [
            'p1' => 0.75,
            'p2' => 1,
            'p3' => 1,
            'p4' => 0.75,
            'p5' => 0.5,
            'p6' => 1,
            'p7' => 0.5,
            'p8' => 0.25,
            'p10' => 0.25,
            'p12' => 0.5,
            'p14' => 0.25,
        ];
        $totalJawaban = 0;
        $totalNilai = 0;
        foreach ($betaNodeI as $id => $value) {
            if (isset($bobotSoalI[$id]) && is_numeric($value)) {
                $bobot = $bobotSoalI[$id];
                $nilai = floatval($value);
                if ($nilai < -0.4 || $nilai > 0.4) {
                    continue;
                }
                $totalJawaban += $bobot * $nilai;
                $totalNilai += abs($nilai);
            }
        }
        // Hitung hasil Rete E
        $hasilReteI = $totalNilai ? ($totalJawaban / $totalNilai) : 0;
        return $hasilReteI;
    }
}
