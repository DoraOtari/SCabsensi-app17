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

      return redirect('/jabatan')->with('pesan', 'Berhasil tambah data');
   }

   public function ubah($id)
   {
   // perintah mengambil satu data berdasarkan id 
    $jabatan = Jabatan::find($id);
   // perintah untuk mengirim data ke halaman ubah
    return view('jabatan.ubah', ['jabatan' => $jabatan]);
   }

   public function hapus($id)
   {
      // perintah hapus data
      Jabatan::destroy($id);
      // perintah kembali ke uri lain
      return redirect('/jabatan')->with('pesan', 'Berhasil hapus data');
   }
   
   public function update($id, Request $req)
   {
      // perintah update
      Jabatan::where('id', $id)->update([
         'nama'   => $req->nama,
         'gaji'   => $req->gaji,
         'status' => $req->status
      ]);
      // perintah mengalihkan ke halaman tampil beserta notifikasi
      return redirect('/jabatan')->with('pesan', 'Berhasil update data');
   }
}
