<?php

namespace App\Http\Middleware;

use App\Models\Pengguna;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekVerifikasiOtp
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $id = session('pengguna_id');

        if (!$id) {
            return redirect('/');
        }

        $pengguna = Pengguna::find($id);

        if (!$pengguna || !$pengguna->is_verified) {
            return redirect('/');
        }

        return $next($request);
    }
}
