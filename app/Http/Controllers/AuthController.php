<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLogin()
    {
        return view('crud/login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cari user berdasarkan name
        $user = User::where('name', $credentials['name'])->first();

        if ($user) {
            $inputPassword = $credentials['password'];
            $dbPassword = $user->password;

            $isHashed = str_starts_with($dbPassword, '$2y$');

            if (
                ($isHashed && Hash::check($inputPassword, $dbPassword)) ||
                (!$isHashed && $inputPassword === $dbPassword)
            ) {
                // Login user
                Auth::login($user);

                if (!$isHashed) {
                    $user->password = Hash::make($inputPassword);
                    $user->save();
                }

                $request->session()->regenerate();
                return redirect()->route('dashboard');
            }
        }

    return back()->with('error', 'Username atau Password salah!');
    }

    public function dashboard()
    {
        $user = Auth::user();
        return view('dashboard', [
            'nama_user' => $user->name
        ]);
    }

    // Logout
    public function logout(Request $request)
    {
    Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    return redirect()->route('login');
    }
}
