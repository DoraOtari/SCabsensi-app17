@extends('bootstrap5')
@section('konten')
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <div class="d-flex me-3">
                    <a href="{{ url('karyawan') }}" class="btn  btn-dark"><i class="bi-arrow-left"></i></a>
                    <h4 class="card-title ms-2">
                        <i class="bi-person-plus"></i>
                        Create Karyawan
                    </h4>
                </div>
                <hr>
                <form action="{{ url('karyawan') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama Karyawan</label>
                        <input type="text" name="nama" class="form-control" placeholder="masukan nama karyawan">
                    </div>
                    <livewire:nik-otomatis :user="$user" />
                    <div class="mb-3">
                        <label class="form-label">Jabatan</label>
                        <select name="jabatan_id" class="form-select">
                            <option selected disabled>--pilih jabatan--</option>
                            @foreach ($jabatan as $kolom)
                            <option value="{{ $kolom->id }}">{{ $kolom->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <livewire:api-daerah />
                </form>
            </div>
        </div>
    </div>
@endsection