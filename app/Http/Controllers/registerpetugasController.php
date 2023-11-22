<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masyarakat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\Pengaduan;


class registerPetugasController extends Controller
{
    function register(){
        return view("/registerpetugas");
    }
    function peroses_tambah(Request $request){

        $id =$request->id;
        $nama =$request->nama;
        $username =$request->username;
        $password =$request->password;
        $telp =$request->telp;
        $level =$request->level;

        DB::table("petugas")->insert([
            
            'id' => $request->id,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'telp' => $request->telp,
            'level' => $request->level,
        ]);
        return redirect('/login');

    }
        
}