<?php

namespace App\Http\Controllers;

use App\Mail\ResetPasswordMail;
use App\Models\PasswordResetToken;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;


class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (empty($request->email) || empty($request->password)) {
            return back()->withErrors([
                'kosong' => 'Email dan password harus diisi'
            ]);
        }


        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('dashboard');
        }

        return back()->withErrors([
            'loginError' => 'Email atau Password salah'
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Kamu berhasil logout');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function register_proses(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);

        $data = [
            'name' => $request->name, // Pastikan nama pengguna disertakan di sini
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];

        // Simpan pengguna baru ke dalam database
        User::create($data);

        // Redirect ke halaman login dengan pesan sukses
        return redirect()->route('login')->with('success', 'Registrasi berhasil. Silakan login.');
    }

    public function forgot()
    {
        return view('auth.forgot');
    }

    public function forgot_password_act(Request $request)
    {
        $customMessage = [
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'email.exists' => 'Email tidak terdaftar di database',
        ];

        $request->validate([
            'email' => 'required|email|exists:users,email'
        ], $customMessage);

        $token = \Str::random(60);

        PasswordResetToken::updateOrCreate(
            [
                'email' => $request->email
            ],
            [
                'token' => $token,
                'created_at' => now(),
            ]
        );

        // Logging untuk memastikan email disimpan dengan benar
        Log::info('Email yang disimpan: ' . $request->email);
        Log::info('Token yang disimpan: ' . $token);

        Mail::to($request->email)->send(new ResetPasswordMail($token));

        return redirect()->route('forgot')->with('success', 'Kami telah mengirimkan link reset password ke email anda');
    }



    public function validasi_forgot_password_act(Request $request)
    {
        $customMessage = [
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal 6 karakter',
        ];

        $request->validate([
            'password' => 'required|min:6'
        ], $customMessage);

        // Logging token yang diterima
        Log::info('Token yang diterima: ' . $request->token);

        $token = PasswordResetToken::where('token', $request->token)->first();

        if (!$token) {
            Log::error('Token tidak ditemukan atau tidak valid');
            return redirect()->route('login')->with('failed', 'Token tidak valid');
        }

        // Logging data token yang ditemukan
        Log::info('Token ditemukan: ' . json_encode($token));

        if (!isset($token->email)) {
            Log::error('Token tidak memiliki email yang valid: ' . json_encode($token));
            return redirect()->route('login')->with('failed', 'Token tidak valid');
        }

        $user = User::where('email', $token->email)->first();

        if (!$user) {
            Log::error('Email tidak ditemukan di database: ' . $token->email);
            return redirect()->route('login')->with('failed', 'Email tidak terdaftar di database');
        }

        // Logging sebelum memperbarui password
        Log::info('Reset password untuk email: ' . $token->email);
        Log::info('Password baru (sebelum hash): ' . $request->password);

        $user->update([
            'password' => Hash::make($request->password)
        ]);

        // Logging setelah memperbarui password
        Log::info('Password baru (setelah hash): ' . $user->password);

        // Hapus token setelah digunakan
        $token->delete();

        return redirect()->route('login')->with('success', 'Password berhasil direset');
    }


    public function validasi_forgot_password(Request $request, $token)
    {
        $getToken = PasswordResetToken::where('token', $token)->first();

        if (!$getToken) {
            return redirect()->route('login')->with('failed', 'Token tidak valid');
        }

        return view('auth.validasi-token', compact('token'));
    }
}
