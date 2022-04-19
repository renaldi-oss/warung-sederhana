<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class registercontroller extends Controller
{
    public function index(){
        return view('form.register.index',[
            'title' => 'Register'
        ]);
    }
    public function store(Request $request){
        $datavalidated=$request->validate([
            'name' => ['required','max:255'],
            'username' => ['required','max:255','unique:users'],
            'email' => ['required','email:dns','unique:users'],
            'password' => 'required|min:6|max:12'
        ]);
        //dump and die
        //dd('registrasi berhasil!');

        //cara enkripsi data
        $datavalidated['password'] = Hash::make($datavalidated['password']);
        //or
        //$datavalidated['password'] = bcrypt($datavalidated['password']);

        //cara kirim data ke database
        User::create($datavalidated);

        //tampilkan notifikasi mengunakan fitur flash
        //$request->session()->flash('success', 'Registrasi berhasil BOSS!!!');

        //kembali ke halaman login
        return redirect('/login')->with('success','Registrasi berhasil BOSS!!!');
    }
}
