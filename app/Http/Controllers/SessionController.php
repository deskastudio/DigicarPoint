<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    function index(){
        return view("sesi/index");
    }

    function login(Request $request){
        Session::flash('email', $request->email);
    
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ],[
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Password wajib diisi',
        ]);
    
        $infoLogin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];
    
        $user = User::where('email', $request->email)->first();
    
        if($user){
            // Jika email ditemukan dalam database
            if(Auth::attempt($infoLogin)){
                //Jika otentikasi sukses
                return redirect('katalog')->with('success', Auth::user()->name . ' Berhasil Login.');
            } else {
                // Jika password salah
                return redirect('sesi')->withErrors([
                    'password' => 'Password yang dimasukkan salah.',
                ]);
            }
        } else {
            // Jika email tidak ditemukan dalam database
            return redirect('sesi')->withErrors([
                'email' => 'Email yang dimasukkan tidak terdaftar.',
            ]);
        }
    }
        function logout(){
            Auth::logout();
            return redirect('/sesi')->with('success', 'Berhasil Logout.');
        }

    // Function Register
    function register(){
        return view('sesi/register');
    }

    // Function create dari register
    function create(Request $request){
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);

        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6',
        ],[
            'name.required'=>'Nama wajib diisi',
            'email.required'=>'Email wajib diisi',
            'email.email'=>'Silahkan masukkan email yang valid',
            'email.unique'=>'Email sudah terdaftar. Silahkan gunakan email yang lain',
            'password.required'=>'Password wajib diisi',
            'password.min'=>'Minimum password yang diizinkan adalah 6',
        ]);

        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ];

        User::create($data);

        $infoLogin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infoLogin)){
            //Jika otentikasi sukses
            return redirect('katalog')->with('success', Auth::user()-> name . ' Berhasil Daftar.');
        } else {
            return redirect('sesi')->withErrors('Username dan password yang dimasukkan tidak valid.');
        }
    }
}
