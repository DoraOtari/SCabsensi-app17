@extends('bootstrap5')
@section('konten')
    <div class="col-lg-6 mx-auto mt-2">
        @if (session('pesan'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong><i class="bi-bell"></i></strong> {{ session('pesan') }}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    <i class="bi-person-bounding-box"></i>
                    Upload Foto
                </h4>
                <hr>
                <livewire:upload-file />
            </div>
        </div>
    </div>
@endsection