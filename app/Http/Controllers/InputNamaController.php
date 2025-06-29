<?php

namespace App\Http\Controllers;

use App\Mail\OtpMail;
use App\Models\HasilMBTI;
use App\Models\Pengguna;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InputNamaController extends Controller
{
    //
    public function index()
    {
        return view('nama');
    }
    public function inputnama(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'nama' => 'required|string',
        ]);

        // Generate OTP
        $otp = rand(100000, 999999);

        $nama = $request->input('nama');
        $pengguna = Pengguna::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'E' => 0,
            'I' => 0,
            'N' => 0,
            'S' => 0,
            'T' => 0,
            'F' => 0,
            'J' => 0,
            'P' => 0,
            'hasil' => 0,
            'otp' => $otp,
            'otp_expiry' => Carbon::now()->addMinutes(10),
            'is_verified' => false,
        ]);
        $id = session('pengguna_id');
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
        // Kirim OTP ke email
        Mail::to($request->email)->send(new OtpMail($otp));
        
        
        return redirect()->route('otp.verify.form')->with('pengguna_id', $pengguna->id);
        // return redirect()->route('external.soal1')->with([]);
    }
}
