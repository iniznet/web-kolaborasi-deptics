<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function proseslogin(Request $request)
    {
        echo "<pre>";
        echo var_dump($request->input());
        echo "</pre>";
        // return view('login');
    }
}
