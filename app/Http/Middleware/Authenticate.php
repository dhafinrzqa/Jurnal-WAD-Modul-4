<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    public function handle($request, Closure $next)
    {
        // ===============1==============
        // Jika rute yang diminta adalah 'login' atau 'register' atau '/', izinkan akses tanpa pemeriksaan autentikasi.
        if () {
            return $next($request);
        }

        //// ===============2==============
        // Jika pengguna tidak terautentikasi, alihkan ke halaman login dengan pesan error.
        if () {
            return redirect()->route('login')->with('error', 'Silakan login untuk melanjutkan!');
        }

        return $next($request);
    }
}
