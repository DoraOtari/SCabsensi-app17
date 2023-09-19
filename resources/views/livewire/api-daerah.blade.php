<div class="row">
    <div class="col">
        <select wire:model="provinsiId" name="provinsi" class="form-select">
            <option value="null" disabled selected>--Pilih Provinsi--</option>
            @foreach ($provinsi as $col)
                <option value="">{{ $col->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="col">
        <select wire:model="kotaId" name="kota" class="form-select">
            <option value="null" disabled selected>--Pilih Kota--</option>
            {{-- @foreach ($kota as $col)
                <option value=""></option>
            @endforeach --}}
        </select>
    </div>
</div>
