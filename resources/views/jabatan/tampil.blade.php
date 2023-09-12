@extends('bootstrap5')
@section('konten')
    <div class="col-lg-6 mx-auto">
        @if (session('pesan'))
            <div class="alert alert-info" role="alert">
                <i class="bi-bell"></i> {{ session('pesan') }}
            </div>
        @endif
        <div class="card border-0">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4><i class="bi-window"></i> Data Jabatan</h4>
                    <a href="{{ url('/jabatan/buat') }}" class="btn btn-dark"><i class="bi-plus"></i> Buat</a>
                </div>
                <hr>
                <table class="table ">
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
                        @forelse($jabatan as $col)
                            <tr>
                                <td>{{ $col->nama }}</td>
                                <td>{{ $col->status }}</td>
                                <td>Rp. {{ number_format($col->gaji,2,',','.')  }}</td>
                                <td><a href="{{ url('jabatan/'.$col->id.'/ubah') }}" class="btn btn-dark"><i class="bi-pen"></i></a></td>
                                <td>
                                    <form action="{{ url('jabatan/'.$col->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-dark"><i class="bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">
                                    <h4 class="text-center"><i class="bi-search"></i> Data tidak ditemukan</h4>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection