@extends('bootstrap5')
@section('konten')
    <div class="col-lg-8 mx-auto">
        @if (session('pesan'))
            <div class="alert alert-info" role="alert">
                <i class="bi-bell"></i> {{ session('pesan') }}
            </div>
        @endif
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
                        @forelse ($karyawan as $item)
                            <tr>
                                <td><img src="" alt=""></td>
                                <td>{{ $item->nik }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>email</td>
                                <td>email</td>
                                <td>jabatan</td>
                            </tr>
                        @empty
                        <tr>
                            <td colspan="8">
                                <h4 class="text-center">
                                    <i class="bi-search"></i> Data tidak ditemukan
                                </h4>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection