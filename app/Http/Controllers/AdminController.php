<?php

namespace App\Http\Controllers;

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
}
