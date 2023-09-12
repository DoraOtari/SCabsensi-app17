@extends('bootstrap5')
@section('konten')
    <div class="col-lg-6 mx-auto">
        <div class="card border-0">
            <div class="card-body">
            <div class="d-flex gap-3">
                <a href="{{ url('jabatan') }}" class="btn  btn-dark"><i class="bi-arrow-left"></i></a>
                <h4><i class="bi-ui-checks-grid"></i> Update Form</h4>
            </div>
                <hr>
                <form action="{{ url('jabatan/'.$jabatan->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label  class="form-label">Nama Jabatan</label>
                        <input value="{{ $jabatan->nama }}" type="text" name="nama"  class="form-control" placeholder="masukan nama jabatan">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Gaji Jabatan</label>
                        <input value="{{ $jabatan->gaji }}" type="text" name="gaji"  class="form-control" placeholder="masukan gaji jabatan">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status Jabatan</label>
                        <select name="status" class="form-select">
                            <option selected disabled>--pilih satu--</option>
                            <option @selected($jabatan->status == "tetap") value="tetap">Tetap</option>
                            <option @selected($jabatan->status == "kontrak") value="kontrak">Kontrak</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark float-end"><i class="bi-send"></i> Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection