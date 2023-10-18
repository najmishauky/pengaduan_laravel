<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masyarakat;
use Illuminate\Support\Facades\DB;

use App\Models\Pengaduan;


class registerController extends Controller
{
    function register(){
        return view("register");
    }
    function peroses_tambah(Request $request){

        $username =$request->username;
        $password =$request->password;
        $telp =$request->telp;
        $nik =$request->nama;

        DB::table("masyarakat")->insert([
            
            'username' => $request->username,
            'password' => $request->password,
            'telp' => $request->telp,
            'nik' => $request->nik,
        ]);
        return redirect('/login');

    }
        
}