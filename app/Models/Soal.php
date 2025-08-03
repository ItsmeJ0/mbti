<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
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
}
