<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuestionWeight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.adminlogin');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = DB::table('useradmin')->where('email', $request->email)->first();

        if ($user && $user->password === $request->password) {
            session([
                'user_id' => $user->id,
                'nama' => $user->nama,
                'email' => $user->email
            ]);

            return redirect()->route('admin.dashboard')->with('success', 'Login berhasil');
        }

        return back()->withErrors(['email' => 'Email atau password salah'])->withInput();
    }
    public function tambahsoal(Request $request)
    {
        $request->validate([
            'kode' => 'required|string|unique:questions,kode',
            'teks_soal' => 'required|string',
            'dimension' => 'required|string',
        ]);

        Question::create([
            'kode' => $request->kode,
            'teks_soal' => $request->teks_soal,
            'dimension' => $request->dimension,
        ]);

        return redirect()->back()->with('success', 'Soal berhasil ditambahkan.');
    }

    // Tambah Bobot Soal
    public function tambahbobot(Request $request)
    {
        $request->validate([
            'kode_soal' => 'required|string|exists:questions,kode',
            'indikator' => 'required|string',
            'bobot' => 'required|numeric',
        ]);
        // dd($request->kode_soal);

        QuestionWeight::create([
            'kode_soal' => $request->kode_soal,
            'indikator' => $request->indikator,
            'bobot' => $request->bobot,
        ]);

        return redirect()->back()->with('success', 'Bobot soal berhasil ditambahkan.');
    }

    // Edit Soal
    public function editsoal(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:questions,id',
            'kode' => 'required|string',
            'teks_soal' => 'required|string',
            'dimension' => 'required|string',
        ]);
        $data = $request->only(['kode', 'teks_soal', 'dimension']);
        // dd($request->id);
        Question::where('id', $request->id)->update($data);



        return redirect()->back()->with('success', 'Soal berhasil diubah.');
    }

    public function editbobot(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:question_weights,id',
            'kode_soal' => 'required|string|exists:questions,kode',
            'indikator' => 'required|string',
            'bobot' => 'required|numeric',
        ]);
        $data = $request->only(['kode_soal', 'indikator', 'bobot']);
        // dd($request->id);
        QuestionWeight::where('id', $request->id)->update($data);

        return redirect()->back()->with('success', 'Bobot soal berhasil diubah.');
    }


    // Hapus Soal
    public function hapussoal(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:questions,id',
        ]);
        // dd($request->id);
        $soal = Question::findOrFail($request->id);
        $soal->delete();

        return redirect()->back()->with('success', 'Soal berhasil dihapus.');
    }

    // Hapus Bobot
    public function hapusbobot(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:question_weights,id',
        ]);

        $bobot = QuestionWeight::findOrFail($request->id);
        $bobot->delete();

        return redirect()->back()->with('success', 'Bobot soal berhasil dihapus.');
    }
}
