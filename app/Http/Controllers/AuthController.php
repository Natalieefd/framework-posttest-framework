<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerAction(Request $request)
    {
        if ($request->password == $request->confPassword) {
            $usernameExist = User::where('username', $request->username)->first();
            $emailExist = User::where('email', $request->email)->first();

            if ($usernameExist) {
                session()->flash('error', 'Username sudah digunakan!');
                return redirect('/register');
            }

            if ($emailExist) {
                session()->flash('error', 'Email sudah digunakan!');
                return redirect('/register');
            }

            User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            session()->flash('success', 'Akun berhasil dibuat!');
            return redirect('/login');
        } else {
            session()->flash('error', 'Konfirmasi password salah!');
            return redirect('/register');
        }
    }

    public function loginAction(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($data)) {
            return redirect('/admin/dashboard');
        } else {
            session()->flash('error', 'Email atau Password salah!');
            return redirect('/login');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
