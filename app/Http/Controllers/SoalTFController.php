<?php

namespace App\Http\Controllers;

use App\Models\HasilMBTI;
use App\Models\Pengguna;
use App\Models\SoalF;
use App\Models\SoalT;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SoalTFController extends Controller
{
    //
    public function index()
    {
        // $SoalT = SoalT::get();
        // $SoalF = SoalF::get();
        // return view('soal.tes3', compact('SoalT', 'SoalF'));
        return view('soal.tes3');
    }

    public function inputdataTF(Request $request)
    {
        $pengguna_id = session('pengguna_id');
        $datajawaban = $request->all();
        $alphaNodeT = [ // Bobot Soal (Alpha Nodes)
            'p29',
            'p30',
            'p31',
            'p32',
            'p33',
            'p34',
            'p35',
            
        ];
        $alphaNodeF = [ // Bobot Soal (Alpha Nodes)
            'p36',
            'p37',
            'p38',
            'p39',
            'p40',
            'p41',
            'p42',
        ];
        $betaNodeT = [];
        foreach ($datajawaban as $key => $value) {
            if (in_array($key, $alphaNodeT)) { // Memeriksa apakah key ada di dalam daftar alpha nodes
                $betaNodeT[$key] = $value;
            }
        }
        $betaNodeF = [];
        foreach ($datajawaban as $key => $value) {
            if (in_array($key, $alphaNodeF)) { // Memeriksa apakah key ada di dalam daftar alpha nodes
                $betaNodeF[$key] = $value;
            }
        }
        $hasilT = SoalT::ProsesJawabanT($betaNodeT);
        $hasilF = SoalF::ProsesJawabanF($betaNodeF);
        HasilMBTI::where('pengguna_id', $pengguna_id)->latest()->first()->update([
            'nilai_T' => $hasilT,
            'nilai_F' => $hasilF,
        ]);
        if ($hasilT > $hasilF) {
            Pengguna::where('id', $pengguna_id)->update(['T' => 0]);
            Pengguna::where('id', $pengguna_id)->update(['F' => 0]);
            Pengguna::where('id', $pengguna_id)->update(['T' => 1]);
        } elseif ($hasilT < $hasilF) {
            Pengguna::where('id', $pengguna_id)->update(['T' => 0]);
            Pengguna::where('id', $pengguna_id)->update(['F' => 0]);
            Pengguna::where('id', $pengguna_id)->update(['F' => 1]);
        }
        // return view('testinghasiljawaban', compact('hasilT', 'hasilF'));
        return redirect()->route('external.soal4');
    }
}
