@extends('bootstrap5')
@section('konten')
    <div class="col-lg-6 mx-auto">
        <div class="card shadow">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4><i class="bi-window"></i> Data Jabatan</h4>
                    <a href="{{ url('/jabatan/buat') }}" class="btn btn-dark"><i class="bi-plus"></i> Buat</a>
                </div>
                <hr>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama Jabatan</th>
                            <th>Status Jabatan</th>
                            <th>Gaji Jabatan</th>
                            <th>Ubah</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="5">
                                <h4 class="text-center"><i class="bi-search"></i> Data tidak ditemukan</h4>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection