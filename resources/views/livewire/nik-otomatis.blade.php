<div>
    <div class="mb-3">
        <label for="" class="badge bg-primary">NIK</label>
        <input value="{{ $nik }}" type="text" name="nik" id="" class="form-control-plaintext" readonly>
    </div>
    <div class="mb-3">
        <label for="" class="form label">Email</label>
        <select wire:model="user_id" name="user_id" id="" class="form-select">
            <option value="null" disabled selected>--Pilih Email--</option>
            @foreach ($user as $kolom)
            <option value="{{ $kolom->id }}">{{ $kolom->email }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Tanggal Lahir</label>
        <input wire:model="tanggal_lahir" type="date" name="tanggal_lahir" id="" class="form-control">
    </div>
</div>
