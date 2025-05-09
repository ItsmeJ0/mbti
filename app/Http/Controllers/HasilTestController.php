<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Jurusan_ukdc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HasilTestController extends Controller
{
    //
    // Dalam HasilTestController
    public function index()
    {
        $pengguna_id = session('pengguna_id');
        $user = DB::table('pengguna')->where('id', $pengguna_id)->first();

        if ($user) {
            $kesimpulan = $this->tentukanKepribadian($user);

            if (empty($kesimpulan)) {
                return "Tidak dapat menentukan tipe kepribadian.";
            } else {
                $tipembti = implode('', $kesimpulan);

                // Update hasil ke dalam tabel pengguna
                DB::table('pengguna')->where('id', $pengguna_id)->update(['hasil' => $tipembti]);

                // Ambil data pekerjaan yang sesuai dengan tipe MBTI
                $jurusan = Jurusan::where('tipe_kepribadian', $tipembti)->get();
                $jurusan_ukdc = Jurusan_ukdc::where('mbti', $tipembti)->get();
                return view('hasil.hasil', compact('tipembti', 'jurusan', 'jurusan_ukdc'));
            }
        }
    }
    private function tentukanKepribadian($user)
    {
        $kesimpulan = [];

        // Menggunakan data dari database untuk menentukan tipe kepribadian
        $kesimpulan[] = ($user->E == 1 && $user->I == 0) ? "E" : "I";
        $kesimpulan[] = ($user->N == 1 && $user->S == 0) ? "N" : "S";
        $kesimpulan[] = ($user->T == 1 && $user->F == 0) ? "T" : "F";
        $kesimpulan[] = ($user->J == 1 && $user->P == 0) ? "J" : "P";

        return $kesimpulan;
    }
}
