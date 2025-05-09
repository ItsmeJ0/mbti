<?php
namespace App\Http\Controllers;
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
        return redirect()->route('external.soal1')->with([]);
    }
}
