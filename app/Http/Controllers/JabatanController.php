<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;

class JabatanController extends Controller
{
   public function tampil()
   {
      // perintah untuk memanggil halaman view
      return view('jabatan.tampil', ['jabatan' => Jabatan::all()]);
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

   public function hapus($id)
   {
      // perintah hapus data
      Jabatan::destroy($id);
      // perintah kembali ke uri lain
      return redirect('/jabatan')->with('pesan', 'Berhasil hapus data');
   }
}
