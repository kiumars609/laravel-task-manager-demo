<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin(){ return view('auth.login'); }
    public function showRegister(){ return view('auth.register'); }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6|confirmed'
        ]);

        $user = User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password'])
        ]);

        Auth::login($user);
        return redirect('/');
    }

    public function login(Request $request)
    {
        $creds = $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(Auth::attempt($creds)){
            return redirect('/');
        }

        return back()->withErrors(['email'=>'Invalid credentials']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
