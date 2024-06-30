<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function registerSave(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'role' => 'required|in:Pembeli,Petani',
            'phone' => 'required|digits_between:10,15', 
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'phone' => $request->phone, 
        ]);

        return redirect()->route('login')->with('success', 'Registration successful! Please login.');
    }

    public function login()
    {
        return view('auth.login');
    }
    public function loginAction(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Coba untuk login
        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            // Jika login gagal, redirect kembali dengan pesan error
            return redirect()->back()->withErrors(['email' => 'Your email or password does not match!']);
        }

        // Regenerasi session
        $request->session()->regenerate();

        // Dapatkan user yang sedang login
        $user = Auth::user();
        Log::info('User logged in:', ['user' => $user]);

        // Redirect berdasarkan role user
        if ($user->role === 'Pembeli') {
            Log::info('Redirecting to dashboard.pembeli');
            return redirect()->route('dashboard.pembeli');
        } elseif ($user->role === 'Marketing') {
            if ($user->email !== 'marketing@gmail.com') {
                Auth::logout();
                return redirect()->route('login')->withErrors([
                    'email' => 'Unauthorized access for marketing role.'
                ]);
            }
            Log::info('Redirecting to dashboard.marketing');
            return redirect()->route('dashboard.marketing');
        } elseif ($user->role === 'Petani') {
            Log::info('Redirecting to dashboard.petani');
            return redirect()->route('dashboard.petani');
        }

        // Default redirect
        return redirect()->route('dashboardltf');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        return redirect('/login');
    }
}
