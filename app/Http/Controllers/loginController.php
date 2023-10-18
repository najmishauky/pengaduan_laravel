<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masyarakat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengaduan;


class LoginController extends Controller
{
    function index(){
        return view("auth.login");
    }
    function login(Request $request){
        $datalogin = $request->only("username", "password");
        if(Auth::attempt($datalogin)){
            return redirect('/pengaduan');
        }else{
            return redirect('/login');
        }
    }


        
}
