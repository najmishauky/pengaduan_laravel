<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masyarakat;
use Illuminate\Support\Facades\DB;

use App\Models\Pengaduan;


class PengaduanController extends Controller
{
    function index(){

    $judul = "Selamat Datang";
    //$pengaduan = DB::table('pengaduan')->get();
    $pengaduan=pengaduan::all();
 

    return view('pengaduan', ['judul' => $judul, 'pengaduan' => $pengaduan]);
   }

   // nyimpan foto / mindahin file
   //$request->foto->storeAs('public/image', $nama_foto);


    function proses_isi_pengaduan(){
        // echo "ini pengaduan countroller";
        $judul ="selamat datang";
 
         return view ('isi_pengaduan',['TextJudul' => $judul]);
     }
     function hom(){
        $judul ="selamat datang";
 
         return view ('hom',['TextJudul' => $judul]);
     }
     function proses_tambah_pengaduan(Request $request){
        //validasi
        $request->validate([
            'isi_laporan' => 'required|min:2'
        ]);


        $isi_pengaduan = $request->isi_laporan;

        DB::table('pengaduan')->insert([
            'tgl_pengaduan'=> date('Y-m-d'),
            'nik' =>'001',
            'isi_laporan' => $isi_pengaduan,
            'foto' => '',
            'status' => '0'
        ]);

        return redirect('/pengaduan');
     }

     function hapus($id)
     {
         echo $id;
         $deleted = DB::table('pengaduan')->where('id_pengaduan', $id)->delete();
         if ($deleted) {
             return redirect('/pengaduan');
         }
     }
 

    function detail_pengaduan($id){
        echo $id;
    }
      
    function update($id){
        $affected = DB::table('pengaduan')
              ->where('id_pengaduan', $id)
              ->update(['isi_laporan' => "isi laporan di Update"]);
    
    }
    
}
