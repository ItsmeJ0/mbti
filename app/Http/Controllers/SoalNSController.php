<?php

namespace App\Http\Controllers;

use App\Models\HasilMBTI;
use App\Models\Pengguna;
use App\Models\SoalN;
use App\Models\SoalS;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SoalNSController extends Controller
{
    //
    public function index()
    {
        // $SoalN = SoalN::get();
        // $SoalS = SoalS::get();
        // return view('soal.tes2', compact('SoalN', 'SoalS'));
        return view('soal.tes2');
    }

    public function inputdataNS(Request $request)
    {
        $pengguna_id = session('pengguna_id');
        $datajawaban = $request->all();
        $alphaNodeN = [ // Bobot Soal (Alpha Nodes)
            'p15',
            'p16',
            'p17',
            'p18',
            'p19',
            'p20',
            'p21',
            'p24',
            'p27',
            'p28',
        ];
        $alphaNodeS = [ // Bobot Soal (Alpha Nodes)
            'p16',
            'p20',
            'p21',
            'p22',
            'p23',
            'p24',
            'p25',
            'p26',
            'p27',
            'p28',
        ];
        $betaNodeN = [];
        foreach ($datajawaban as $key => $value) {
            if (in_array($key, $alphaNodeN)) { // Memeriksa apakah key ada di dalam daftar alpha nodes
                $betaNodeN[$key] = $value;
            }
        }
        $betaNodeS = [];
        foreach ($datajawaban as $key => $value) {
            if (in_array($key, $alphaNodeS)) { // Memeriksa apakah key ada di dalam daftar alpha nodes
                $betaNodeS[$key] = $value;
            }
        }
        $hasilN = SoalN::ProsesJawabanN($betaNodeN);
        $hasilS = SoalS::ProsesJawabanS($betaNodeS);
        HasilMBTI::where('pengguna_id', $pengguna_id)->latest()->first()->update([
            'nilai_N' => $hasilN,
            'nilai_S' => $hasilS,
        ]);
        if ($hasilN > $hasilS) {
            Pengguna::where('id', $pengguna_id)->update(['N' => 1]);
        } elseif ($hasilN < $hasilS) {
            Pengguna::where('id', $pengguna_id)->update(['S' => 1]);
        }
        // return view('testinghasiljawaban', compact('hasilN', 'hasilS'));
        return redirect()->route('external.soal3');
    }
}
