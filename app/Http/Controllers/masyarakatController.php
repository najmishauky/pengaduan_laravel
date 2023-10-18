<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masyarakat;
use Illuminate\Support\Facades\DB;

use App\Models\Pengaduan;


class PengaduanController extends Controller
{
    
     function proses_tambah_masyarakat(Request $request){
        //validasi
        $request->validate([
            'isi_laporan' => 'required|min:2'
        ]);


        $isi_pengaduan = $request->isi_laporan;

        DB::table('masyarakat')->insert([
            
        ]);

        return redirect('/pengaduan');
     }
}
