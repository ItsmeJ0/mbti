<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\SoalJ;
use App\Models\SoalP;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class SoalJPController extends Controller
{
    //
    public function index()
    {
        // $SoalJ = SoalJ::get();
        // $SoalP = SoalP::get();
        // return view('soal.tes4', compact('SoalJ', 'SoalP'));
        return view('soal.tes4');
    }

    public function inputdataJP(Request $request)
    {
        $pengguna_id = session('pengguna_id');
        $datajawaban = $request->all();
        $alphaNodeJ = [ // Bobot Soal (Alpha Nodes)
            'p43',
            'p44',
            'p45',
            'p46',
            'p47',
            'p48',
            'p49',
            'p53',
            
        ];
        $alphaNodeP = [ // Bobot Soal (Alpha Nodes)
            'p49',
            'p50',
            'p51',
            'p52',
            'p53',
            'p54',
        ];
        $betaNodeJ = [];
        foreach ($datajawaban as $key => $value) {
            if (in_array($key, $alphaNodeJ)) { // Memeriksa apakah key ada di dalam daftar alpha nodes
                $betaNodeJ[$key] = $value;
            }
        }
        $betaNodeP = [];
        foreach ($datajawaban as $key => $value) {
            if (in_array($key, $alphaNodeP)) { // Memeriksa apakah key ada di dalam daftar alpha nodes
                $betaNodeP[$key] = $value;
            }
        }
        $hasilJ = SoalJ::ProsesJawabanJ($betaNodeJ);
        $hasilP = SoalP::ProsesJawabanP($betaNodeP);
        if ($hasilJ > $hasilP) {
            Pengguna::where('id', $pengguna_id)->update(['J' => 1]);
        } elseif ($hasilJ < $hasilP) {
            Pengguna::where('id', $pengguna_id)->update(['P' => 1]);
        }
        return redirect()->route('external.proseshasil');
    }
}
