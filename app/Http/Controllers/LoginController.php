<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('form.login.index',[
            'title' => 'Login'
        ]);
    }
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ]);


        if(Auth::attempt($credentials)){
            //regenerate digunakan untuk mencegah hekell membobol celah keamanan melewati session
            $request->session()->regenerate();
            //redirect akan melempar user ke URL sebelum dicegah authentikasi middleware
            return redirect()->intended('/dashboard');

        }else{
        //ketika authentikasi gagal
            return back()->with('LoginError','login gagal!');
        }

        //test die and dump
        //dd('berhasil login');

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
