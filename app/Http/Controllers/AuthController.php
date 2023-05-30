<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function indexLogin()
    {
        return view('login');
    }

    public function indexRegister()
    {
        return view('register');
    }


    public function login(Request $req)
    {
        $credentials = $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();
            return redirect("/");
        } else {
            // Wrong credentials
            return redirect("/login")->with('error', 'Invalid credentials. Please check your email and password.');
        }
    }

    public function register(Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        return redirect("/login")->with('success', 'Registrasi berhasil! Silahkan login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect("/login");
    }
}
