<?php
namespace App\Http\Controllers;

use App\Models\HasilMBTI;
use App\Models\Pengguna;
use Illuminate\Http\Request;
class InputNamaController extends Controller
{
    //
    public function index()
    {
        return view('nama');
    }
    public function inputnama(Request $request)
    {
        $nama = $request->input('nama');
        $pengguna = Pengguna::create([
            'nama' => $nama,
            'E' => 0,
            'I' => 0,
            'N' => 0,
            'S' => 0,
            'T' => 0,
            'F' => 0,
            'J' => 0,
            'P' => 0,
            'hasil' => 0,
        ]);
        $id = $pengguna->id;
        session(['pengguna_id' => $id]);
        HasilMBTI::create([
            'pengguna_id' => session('pengguna_id'),
            'nilai_I' => 0,
            'nilai_E' => 0,
            'nilai_S' => 0,
            'nilai_N' => 0,
            'nilai_T' => 0,
            'nilai_F' => 0,
            'nilai_J' => 0,
            'nilai_P' => 0,
            'hasil_tipe' => 0, // contoh: 'ENTP'
        ]);
        
        return redirect()->route('external.soal1')->with([]);
    }
}
