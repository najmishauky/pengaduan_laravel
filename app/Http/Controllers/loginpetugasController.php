<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masyarakat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengaduan;


class LoginPetugasController extends Controller
{
    function index(){
        return Hash::make("123");
        return view("auth.login_petugas");
    }
    public function login(Request $request){

        $data = $request->only("username", "password");
        if(Auth::guard("petugas")->attempt($data)){
            return redirect('/pengaduan');
            //echo "berhasil login";
        }else{
            return redirect('/login');
            //echo "gagal login";
        }
    }

    public function pengaduan(){
        return "ini hom";
    }

        
}
