<div>
    <div class="mb-3 row">
        <label for="provinsi" class="col-md-4 col-form-label text-md-end">{{ __('Provinsi') }}</label>
        <div class="col-md-8">

            <select wire:model.live="selectedProvinsi" id="provinsi" class="form-control" name="provinsi" required>
                <option value="">Pilih Provinsi</option>
                @foreach ($provinsi as $provinsiItem)
                    <option value="{{ $provinsiItem->id_provinsi }}">{{ $provinsiItem->nama_provinsi }}</option>
                @endforeach
            </select>
            @error('provinsi')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="kota" class="col-md-4 col-form-label text-md-end">{{ __('Kabupaten / Kota') }}</label>
        <div class="col-md-8">
            <select wire:model.live="selectedKota" id="kota"
                class="form-control @error('kota') is-invalid @enderror" name="kota" required autocomplete="kota"
                autofocus>
                <option value="">Pilih Kota</option>
                @if ($kota)
                    @foreach ($kota as $kotaItem)
                        <option value="{{ $kotaItem->id_kota }}">{{ $kotaItem->nama_kota }}</option>
                    @endforeach
                @endif
            </select>
            @error('kota')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="kecamatan" class="col-md-4 col-form-label text-md-end">{{ __('Kecamatan') }}</label>
        <div class="col-md-8">
            <select wire:model.live="selectedKecamatan" id="kecamatan"
                class="form-control @error('kecamatan') is-invalid @enderror" name="kecamatan" required
                autocomplete="kecamatan" autofocus>
                <option value="">Pilih Kecamatan</option>
                @if ($kecamatan)
                    @foreach ($kecamatan as $kecamatanItem)
                        <option value={{ $kecamatanItem->id_kecamatan }}>{{ $kecamatanItem->nama_kecamatan }}</option>
                    @endforeach
                @endif
            </select>
            @error('kecamatan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="kelurahan" class="col-md-4 col-form-label text-md-end">{{ __('Kelurahan') }}</label>
        <div class="col-md-8">
            <select wire:model.live="selectedKelurahan" id="kelurahan"
                class="form-control @error('kelurahan') is-invalid @enderror" name="kelurahan" required
                autocomplete="kelurahan" autofocus>
                <option value="">Pilih Kelurahan</option>
                @if ($kelurahan)
                    @foreach ($kelurahan as $kelurahanItem)
                        <option value={{ $kelurahanItem->id_kelurahan }}>{{ $kelurahanItem->nama_kelurahan }}</option>
                    @endforeach
                @endif
            </select>
            @error('kelurahan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="kodepos" class="col-md-4 col-form-label text-md-end">{{ __('Kodepos') }}</label>
        <div class="col-md-8">
            <input type="text" wire:model="kodepos" id="kodepos" class="form-control" name="kodepos" readonly>
        </div>
    </div>
</div>
