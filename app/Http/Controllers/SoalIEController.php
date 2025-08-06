<?php

namespace App\Http\Controllers;

use App\Models\HasilMBTI;
use App\Models\Pengguna;
use App\Models\Soal;
use App\Models\SoalE;
use App\Models\SoalI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SoalIEController extends Controller
{
    public function index()
    {
        $questions = DB::table('questions')
            ->where('dimension', 'IE')
            ->orderByRaw('CAST(SUBSTRING(kode, 2) AS UNSIGNED) ASC')
            ->get();

        return view('soal.tes', compact('questions'));
    }
    public function inputdataIE(Request $request)
    {
        $pengguna_id = session('pengguna_id');
        $datajawaban = $request->all();
        $alphaNodeI = DB::table('question_weights')
            ->where('indikator', 'I')
            ->pluck('kode_soal')
            ->toArray();
        $bobotSoalI = DB::table('question_weights')
            ->where('indikator', 'I')
            ->pluck('bobot', 'kode_soal')
            ->toArray();
        $alphaNodeE = DB::table('question_weights')
            ->where('indikator', 'E')
            ->pluck('kode_soal')
            ->toArray();
        $bobotSoalE = DB::table('question_weights')
            ->where('indikator', 'E')
            ->pluck('bobot', 'kode_soal')
            ->toArray();
        $betaNodeI = array_intersect_key($datajawaban, array_flip($alphaNodeI));
        $betaNodeE = array_intersect_key($datajawaban, array_flip($alphaNodeE));
        $hasilI = Soal::ProsesJawaban($betaNodeI, $bobotSoalI);
        $hasilE = Soal::ProsesJawaban($betaNodeE, $bobotSoalE);

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
