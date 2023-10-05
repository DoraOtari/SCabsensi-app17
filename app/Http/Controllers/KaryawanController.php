<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\User;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::with('jabatan')->get();
        dd($karyawan);
        return view('karyawan.index', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = \App\Models\Jabatan::all();
        $user    = \App\Models\User::all();
        return view('karyawan.create', compact('jabatan', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Karyawan::create([
            'nama'          => $request->nama,
            'NIK'           => $request->nik,
            'user_id'       => $request->user_id,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jabatan_id'    => $request->jabatan_id,
            'provinsi'      => $request->provinsi,
            'kota'          => $request->kota,
            'alamat'        => $request->alamat,
        ]);

        return redirect('/karyawan')->with('pesan', 'Berhasil tambah data karyawan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawan $karyawan)
    {
        return view('karyawan.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawan $karyawan)
    {
        //
    }

    public function profil()
    {
        return view('karyawan.upload-foto');
    }

    public function upload(Request $request)
    {
        $valid = $request->validate([
            'avatar' => 'required|max:500' // hanya boleh upload maksimal 500
        ]);

        $foto = $request->avatar->store('PROFIL'); // jika lolos validasi simpan foto di folder profil
        
        User::where('id', auth()->user()->id)->update([
            'avatar' => $foto
        ]); // simpan nama foto di database
       
        return redirect('/profil')->with('pesan', 'Berhasil Upload Foto Profil');
    }
}
