<div class="row">
    <label class="form-label">Alamat</label>
    <div class="col">
        <select wire:model="provinsiId" wire:change="kota" name="provinsi" class="form-select">
            <option value="null" disabled selected>--Pilih Provinsi--</option>
            @foreach ($provinsi as $col)
                <option value="{{ $col->id.'/'.$col->name }}">{{ $col->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="col">
        <select wire:model="kotaId" name="kota" class="form-select">
            <option value="null" disabled selected>--Pilih Kota--</option>
            @foreach ($kota as $col)
                <option value="{{ $col['id'].'/'.$col['name'] }}">{{ $col['name'] }}</option>
            @endforeach
        </select>
    </div>
</div>
