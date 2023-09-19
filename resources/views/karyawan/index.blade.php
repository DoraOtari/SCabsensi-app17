@extends('bootstrap5')
@section('konten')
    <div class="col-lg-8 mx-auto">
        <div class="card border-0">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title"><i class="bi-person"></i> Data Karyawan</h4>
                    <a href="{{ url('/karyawan/create') }}" class="btn btn-dark"><i class="bi-plus"></i> create</a>
                </div>
                <hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Jabatan</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="8">
                                <h4 class="text-center">
                                    <i class="bi-search"></i> Data tidak ditemukan
                                </h4>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection