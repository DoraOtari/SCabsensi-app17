<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;

class JabatanController extends Controller
{
   public function tampil()
   {
      return view('jabatan.tampil');
   }

   public function buat()
   {
    return view('jabatan.buat');
   }

   public function simpan(Request $req)
   {
      Jabatan::create([
         'nama' => $req->nama,
         'gaji' => $req->gaji,
         'status' => $req->status,
      ]);

      return redirect('/jabatan');
   }

   public function ubah()
   {
    
   }
}
