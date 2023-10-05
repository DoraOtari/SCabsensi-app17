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
                            <th>Detail</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($karyawan as $item)
                            <tr>
                                <td>
                                    @if ($item->user->avatar)
                                    <img src="{{ asset('storage/'.$item->user->avatar) }}" style="width: 40px; aspect-ratio:1/1;border-radius: 50%">
                                    @else
                                    <img src="{{ asset('no-profil.png') }}" style="width: 40px; aspect-ratio:1/1;border-radius: 50%">
                                    @endif
                                </td>
                                <td>
                                    <span class="badge bg-dark">
                                        {{ $item->NIK }}
                                    </span>
                                </td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->user->email }}</td>
                                <td>{{ $item->jabatan->nama }}</td>
                                <td><button class="btn btn-dark "><i class="bi-eye"></i></button></td>
                                <td><a href="{{ url('karyawan/'.$item->id) }}" class="btn btn-primary"><i class="bi-pen"></i></a></td>
                                <td>
                                    <form action="{{ url('karyawan/'.$item->id) }}" method="post">
                                        @csrf
                                        <button class="btn btn-danger"><i class="bi-trash"></i></button>
                                    </form>
                                </td>
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