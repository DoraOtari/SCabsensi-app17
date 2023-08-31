@extends('bootstrap5')
@section('konten')
    <div class="col-lg-6 mx-auto">
        <div class="card border-0">
            <div class="card-body">
                <h4><i class="bi-ui-checks-grid"></i> Form</h4>
                <hr>
                <form action="{{ url('/jabatan') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label  class="form-label">Nama Jabatan</label>
                        <input type="text" name="nama"  class="form-control" placeholder="masukan nama jabatan">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Gaji Jabatan</label>
                        <input type="text" name="gaji"  class="form-control" placeholder="masukan gaji jabatan">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status Jabatan</label>
                        <select name="status" class="form-select">
                            <option selected disabled>--pilih satu--</option>
                            <option value="tetap">Tetap</option>
                            <option value="kontrak">Kontrak</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark float-end"><i class="bi-send"></i> Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection