<div>
    <h4 class="lead text-center">Foto Preview</h4> 
    @if ($foto)
        <img src="{{ $foto->temporaryUrl() }}" class="rounded-circle d-block mx-auto mb-3" style="width: 150px;aspect-ratio:1/1">
    @endif
    <form action="{{ url('upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <input wire:model="foto" type="file" name="avatar" class="form-control @error('avatar') is-invalid @enderror">
            @error('avatar')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <span class="float-end">
            <button type="submit" class="btn btn-primary">
                <i class="bi-upload"></i> Upload
            </button>
        </span>
    </form>
</div>
