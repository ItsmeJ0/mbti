<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AuthOTPController extends Controller
{
    //
    public function showOtpVerifyForm()
    {
        return view('otp.verify');
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|digits:6',
        ]);

        $user = Pengguna::where('id', $request->pengguna_id)
            ->where('otp', $request->otp)
            ->where('otp_expiry', '>=', Carbon::now())
            ->first();

        if ($user) {
            $user->update([
                'is_verified' => true,
                'otp' => null,
                'otp_expiry' => null,
            ]);
            // SIMPAN ULANG pengguna_id ke session
            session(['pengguna_id' => $user->id]);

            // return redirect()->route('soal.mbti')->with('success', 'Verifikasi berhasil. Silakan mulai tes!');
            return redirect()->route('external.soal1')->with([]);
        }

        return back()->withErrors(['otp' => 'OTP tidak valid atau sudah kadaluarsa.']);
    }
}
