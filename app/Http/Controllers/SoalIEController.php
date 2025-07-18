<?php

namespace App\Http\Controllers;
use App\Models\HasilMBTI;
use App\Models\Pengguna;
use App\Models\SoalE;
use App\Models\SoalI;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SoalIEController extends Controller
{
    public function index()
    {
        return view('soal.tes');
    }
    public function inputdataIE(Request $request)
    {
        $pengguna_id = session('pengguna_id');
        $datajawaban = $request->all();
        $alphaNodeI = [ // Bobot Soal (Alpha Nodes)
            'p1',
            'p2',
            'p3',
            'p4',
            'p5',
            'p6',
            'p7',
            'p8',
            'p10',
            'p12',
            'p14',
        ];
        $alphaNodeE = [ // Bobot Soal (Alpha Nodes)
            'p4',
            'p5',
            'p7',
            'p8',
            'p9',
            'p10',
            'p11',
            'p12',
            'p13',
            'p14',
        ];
        $betaNodeI = [];
        foreach ($datajawaban as $key => $value) {
            if (in_array($key, $alphaNodeI)) {
                $betaNodeI[$key] = $value;
            }
        }
        $betaNodeE = [];
        foreach ($datajawaban as $key => $value) {
            if (in_array($key, $alphaNodeE)) { 
                $betaNodeE[$key] = $value;
            }
        }
        $hasilI = SoalI::ProsesJawabanI($betaNodeI);
        $hasilE = SoalE::ProsesJawabanE($betaNodeE);
        HasilMBTI::where('pengguna_id', $pengguna_id)->latest()->first()->update([
            'nilai_I' => $hasilI,
            'nilai_E' => $hasilE,
        ]);
        if ($hasilI > $hasilE) {
            Pengguna::where('id', $pengguna_id)->update(['I' => 0]);
            Pengguna::where('id', $pengguna_id)->update(['E' => 0]);
            Pengguna::where('id', $pengguna_id)->update(['I' => 1]);
        } elseif ($hasilI < $hasilE) {
            Pengguna::where('id', $pengguna_id)->update(['I' => 0]);
            Pengguna::where('id', $pengguna_id)->update(['E' => 0]);
            Pengguna::where('id', $pengguna_id)->update(['E' => 1]);
        }
        return redirect()->route('external.soal2');
    }

    public function inputdataIExxx(Request $request)
    {
        $pengguna_id = session('pengguna_id');
        $data = $request->all();
        // dd($data);
        $soalI = [];
        $soalE = [];
        foreach ($data as $key => $value) {
            if (Str::startsWith($key,  ['p1', 'p2'])) {
                // $soalI[$key] = $value;
                $soalI[$key] = $key;
                dd($soalI[$key]);
            } elseif (Str::startsWith($key, 'e')) {
                $soalE[$key] = $value;
            }
        }
        $hasilI = SoalI::ProsesJawabanI($soalI);
        $hasilE = SoalE::ProsesJawabanE($soalE);
        if ($hasilI > $hasilE) {
            Pengguna::where('id', $pengguna_id)->update(['I' => 1]);
        } elseif ($hasilI < $hasilE) {
            Pengguna::where('id', $pengguna_id)->update(['E' => 1]);
        }
        // return view('testinghasiljawaban', compact('hasilI', 'hasilE'));
        return redirect()->route('external.soal2', [
            'soalI' => $soalI,
            'soalE' => $soalE,
        ]);
    }
}
