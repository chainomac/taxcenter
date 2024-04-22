@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('proses.register_umum') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="latar-belakang"
                                    class="col-md-4 col-form-label text-md-end">{{ __('latar-belakang') }}</label>
                                <div class="col-md-6">
                                    <select id="latar-belakang"
                                        class="form-control select2 @error('latar-belakang') is-invalid @enderror"
                                        name="latar-belakang" required autocomplete="latar-belakang" autofocus>
                                        <option value="">Pilih Latar Belakang Peserta</option>
                                        <option value="4">Pegawai Untirta</option>
                                        <option value="5">Mahasiswa Untirta</option>
                                        <option value="6">Umum (Di Luar Untirta)</option>
                                    </select>
                                    @error('latar-belakang')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- jika pegawai, maka muncul NIP --}}
                            <div class="row mb-3">
                                <label for="nip" id="nip"
                                    class="col-md-4 col-form-label text-md-end">{{ __('NIP') }}</label>
                                <div class="col-md-3">
                                    <input id="nip2" type="text"
                                        class="form-control @error('nip') is-invalid @enderror" name="nip"
                                        value="{{ old('nip') }}" required autocomplete="name" autofocus
                                        placeholder="Nomor Induk Pegawai">

                                    @error('nip')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Jika Mahasiswa , maka muncul NIM --}}
                            <div class="row mb-3">
                                <label for="nim"
                                    class="col-md-4 col-form-label text-md-end">{{ __('NIM') }}</label>
                                <div class="col-md-6">
                                    <input id="nim" type="text"
                                        class="form-control @error('fullname') is-invalid @enderror" name="nim"
                                        value="{{ old('nim') }}" required autocomplete="name" autofocus
                                        placeholder="Nomor Induk Mahasiswa">

                                    @error('nim')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="fakultas"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Fakultas') }}</label>
                                <div class="col-md-6">
                                    <select id="fakultas"
                                        class="form-control select2 @error('gender') is-invalid @enderror" name="fakultas"
                                        required autocomplete="fakultas" autofocus>
                                        <option value="">Pilih Fakultas</option>
                                    </select>
                                    @error('fakultas')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- End Jika Mahasiswa --}}
                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nama Lengkap') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('fullname') is-invalid @enderror" name="fullname"
                                        value="{{ old('fullname') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nim"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Tempat, Tanggal Lahir') }}</label>
                                <div class="col-md-3">
                                    <input id="tempat_lahir" type="text"
                                        class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir"
                                        value="{{ old('tempat_lahir') }}" required autocomplete="name" autofocus
                                        placeholder="Tempat Lahir">
                                </div>
                                @error('tempat_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="col-md-3">
                                    <input id="tgl_lahir" type="text"
                                        class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir"
                                        value="{{ old('tgl_lahir') }}" required autocomplete="name" autofocus
                                        placeholder="yyyy-mm-dd">

                                    @error('tgl_lahir')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Kata Sandi') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password" autofocus>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Konfirmasi Kata Sandi') }}</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="gender"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Jenis Kelamin') }}</label>
                                <div class="col-md-6">
                                    <select id="gender"
                                        class="form-control select2 @error('gender') is-invalid @enderror" name="gender"
                                        required autocomplete="gender" autofocus>
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Alamat') }}</label>
                                <div class="col-md-6">
                                    <input id="alamat" type="text" class="form-control" name="alamat" required
                                        autocomplete="alamat" maxlength="100"
                                        placeholder="Jalan / Komplek / Blok RT RW / No. Rumah">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="provinsi"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Provinsi') }}</label>
                                <div class="col-md-6">
                                    <select id="provinsi"
                                        class="form-control select2 @error('gender') is-invalid @enderror"
                                        name="provinsi" required autocomplete="provinsi" autofocus>
                                        <option value="">Pilih Provinsi</option>
                                    </select>
                                    @error('provinsi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="kota"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Kabupaten / Kota') }}</label>
                                <div class="col-md-6">
                                    <select id="kota"
                                        class="form-control select2 @error('gender') is-invalid @enderror" name="kota"
                                        required autocomplete="provinsi" autofocus>
                                        <option value="">Pilih Kabupaten / Kota</option>
                                    </select>
                                    @error('kota')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="kecamatan"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Kecamatan') }}</label>
                                <div class="col-md-6">
                                    <select id="kecamatan"
                                        class="form-control select2 @error('gender') is-invalid @enderror"
                                        name="kecamatan" required autocomplete="kecamatan" autofocus>
                                        <option value="">Pilih Kecamatan</option>
                                    </select>
                                    @error('kecamatan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="kelurahan"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Kelurahan') }}</label>
                                <div class="col-md-6">
                                    <select id="kelurahan"
                                        class="form-control select2 @error('gender') is-invalid @enderror"
                                        name="kelurahan" required autocomplete="kelurahan" autofocus>
                                        <option value="">Pilih Kelurahan</option>
                                    </select>
                                    @error('kelurahan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="kodepos"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Kodepos') }}</label>
                                <div class="col-md-6">
                                    <input id="kodepos" type="text" class="form-control" name="kodepos" required
                                        autocomplete="kodepos" maxlength="4" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="no-hp"
                                    class="col-md-4 col-form-label text-md-end">{{ __('No Handphone') }}</label>
                                <div class="col-md-6">
                                    <input id="nohp" type="text" class="form-control" name="nohp" required
                                        autocomplete="no-hp" maxlength="20" autofocus>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary"> <i class="fas fa-floppy-disk"></i>
                                        {{ __('Daftar') }}
                                    </button>
                                    <a class="btn btn-danger btn-round" href="{{ route('login') }}">
                                        <i class="fas fa-sign-in-alt"> {{ __('Login') }}</i>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
