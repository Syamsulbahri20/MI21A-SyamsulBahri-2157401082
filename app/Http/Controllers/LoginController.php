<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
class LoginController extends Controller
{
    //
    public function login (){
        return view('login');
    }
    public function beranda (){
        // $data = [
        //    'email' => $request->input('email'),
        //    'password' => $request->input('password')
        // ];
        // dd($data);
        return view ('beranda');


    }
}