<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CobaController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function prosesregister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8',
            'konf_password' => 'required|same:password'
        ],
        [
            'required' => ':attribute wajib diisi',
            'unique' => ':attribute sudah terdaftar',
            'min' => ':attribute minimum 8 karakter',
            'same' => ':attribute tidak sesuai'
        ],
        [
            'username' => 'Username',
            'password' => 'Password',
            'konf_password' => 'Konfirmasi password'
        ]);

        if ($validator->fails()) {
            return redirect('/cobaregister')
                        ->withErrors($validator)
                        ->withInput();
        }

        $username = $request->input('username');
        $password = $request->input('password');

        $users = User::create([
            'username' => $username,
            'password'  => Hash::make($password)
        ]);

        if ($users) {
            return redirect('/cobalogin')->with('status_register', 'Berhasil daftar!');
        }
    }

    public function proseslogin(Request $request) {
        // echo "<pre>";
        // echo var_dump($request->input());
        // echo "</pre>";

        $validator = Validator::make($request->all(),
        [
            'username' => 'required',
            'password' => 'required',
        ],[
            'required' => ':attribute wajib diisi'
        ],[
            'username' => 'Username',
            'password' => 'Password',
        ]);

        if ($validator->fails()) {
            return redirect('/cobalogin')
                            ->withErrors($validator)
                            ->withInput();
        }

        $username = $request->input('username');
        $password = $request->input('password');
        $remember = $request->input('remember-me');

        if (Auth::attempt(['username' => $username, 'password' => $password], $remember)) {
            return redirect('/coba');
        } else {
            return redirect('/cobalogin')->with('status_login', 'Username belum terdaftar');
        }
    }
}
