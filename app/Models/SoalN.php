<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalN extends Model
{
    use HasFactory;
    protected $table = 'soal_n';

    public static function ProsesJawabanN($betaNodeN)
    {
        $bobotSoalN = [ // Bobot Soal (Alpha Nodes)
            'p15'=> 1,
            'p16'=> 1,
            'p17'=> 1,
            'p18'=> 1,
            'p19'=> 0.25,
            'p20'=> 0.75,
            'p21'=> 0.5,
            'p24'=> 0.25,
            'p27'=> 0.25,
            'p28'=> 0.25,
        ];

        $totalJawaban = 0;
        $totalNilai = 0;

        foreach ($betaNodeN as $id => $value) {
            if (isset($bobotSoalN[$id]) && is_numeric($value)) {
                $bobot = $bobotSoalN[$id];
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
        $hasilReteN = $totalNilai ? ($totalJawaban / $totalNilai) : 0;
        // dd($hasilReteE);
        // dd($hasilReteN);
        return $hasilReteN;
    }
}
