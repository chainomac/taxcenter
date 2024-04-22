@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Pendaftaran Brevet Untuk Mahasiswa') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('proses.register_mahasiswa') }}" id="registration-form">
                            @csrf
                            <div class="row mb-3">
                                <label for="nim"
                                    class="col-md-4 col-form-label text-md-end">{{ __('NIM') }}</label>
                                <div class="col-md-8">
                                    <input id="nim" type="text"
                                        class="form-control @error('fullname') is-invalid @enderror" name="nim"
                                        value="{{ old('nim') }}" minlength="10" maxlength="10" autocomplete="name"
                                        autofocus placeholder="Nomor Induk Mahasiswa">

                                    @error('nim')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="fakultas"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Fakultas') }}</label>
                                <div class="col-md-8">
                                    <select id="fakultas"
                                        class="form-control select2bs4 @error('fakultas') is-invalid @enderror"
                                        name="fakultas" required autocomplete="fakultas" autofocus>
                                        <option value="">Pilih Fakultas</option>
                                        @foreach ($fakultas as $fakultasItem)
                                            <option value="{{ $fakultasItem->id }}">{{ $fakultasItem->nama_fakultas }}
                                            </option> <!-- Sesuaikan dengan nama field yang sesuai di tabel fakultas -->
                                        @endforeach
                                    </select>
                                    @error('fakultas')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="semester"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Semester') }}</label>
                                <div class="col-md-8">
                                    <select id="semester"
                                        class="form-control select2bs4 @error('semester') is-invalid @enderror"
                                        style="width: 100%;" name="semester" required autocomplete="semester" autofocus>
                                        <option value="">Pilih Semester</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="Sudah Lulus">Sudah Lulus</option>

                                    </select>
                                    @error('semester')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nama Lengkap') }}</label>
                                <div class="col-md-8">
                                    <input id="name" type="text"
                                        class="form-control @error('fullname') is-invalid @enderror" name="fullname"
                                        placeholder="Nama lengkap tanpa gelar" value="{{ old('fullname') }}" required
                                        autocomplete="name" autofocus>

                                    @error('fullname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nim"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Tempat, Tanggal Lahir') }}</label>
                                <div class="col-md-4">
                                    <input id="tempat_lahir" type="text"
                                        class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir"
                                        value="{{ old('tempat_lahir') }}" required autocomplete="tempat_lahir" autofocus
                                        placeholder="Tempat Lahir">
                                </div>
                                @error('tempat_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="col-md-4">
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                            data-target="#reservationdate" name="tgl_lahir" placeholder="yyyy-mm-dd" />
                                        <div class="input-group-append" data-target="#reservationdate"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @error('tgl_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                                <div class="col-md-8">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" placeholder="Contoh : aaa@gmail.com" required
                                        autocomplete="email" autofocus>
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
                                <div class="col-md-8 input-group">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password" autofocus>
                                    <div class="input-group-append">
                                        <button type="button" id="show-password" class="btn btn-outline-secondary">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                    </div>

                                </div>
                                <small id="password-info" class="form-text"></small>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Konfirmasi Kata Sandi') }}</label>

                                <div class="col-md-8 input-group">
                                    <input id="password-confirm" type="password"
                                        class="form-control @error('password-confirm') is-invalid @enderror"
                                        name="password_confirmation" required autocomplete="new-password" autofocus>

                                    <div class="input-group-append">
                                        <button type="button" id="show-password-confirm"
                                            class="btn btn-outline-secondary">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                    </div>

                                    <div class="invalid-feedback" id="password-mismatch" style="display: none;">
                                        Konfirmasi kata sandi tidak cocok.
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="gender"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Jenis Kelamin') }}</label>
                                <div class="col-md-8">
                                    <select id="gender"
                                        class="form-control select2bs4 @error('gender') is-invalid @enderror"
                                        name="gender" required autocomplete="gender" autofocus>
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
                                <div class="col-md-8">
                                    <input id="alamat" type="text" class="form-control" name="alamat" required
                                        autocomplete="alamat" maxlength="100"
                                        placeholder="Jalan / Komplek / Blok RT RW / No. Rumah">
                                </div>
                            </div>
                            <livewire:dependent-dropdown />
                            <div class="row mb-3">
                                <label for="no-hp"
                                    class="col-md-4 col-form-label text-md-end">{{ __('No Handphone') }}</label>
                                <div class="col-md-8">
                                    <input id="nohp" type="text" class="form-control" name="nohp"
                                        placeholder="Contoh : 0851234569" required autocomplete="no-hp" maxlength="20"
                                        autofocus>
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
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordField = document.getElementById('password');
            const passwordConfirmField = document.getElementById('password-confirm');
            const showPasswordButton = document.getElementById('show-password');
            const showPasswordConfirmButton = document.getElementById('show-password-confirm');
            const passwordMismatchMessage = document.getElementById('password-mismatch');
            const passwordInfoMessage = document.getElementById('password-info');
            const passwordInfo = document.getElementById('password-info');
            const form = document.getElementById('registration-form');

            showPasswordButton.addEventListener('click', function() {
                if (passwordField.type === 'password') {
                    passwordField.type = 'text';
                    showPasswordButton.innerHTML = '<i class="fa fa-eye-slash"></i>';
                } else {
                    passwordField.type = 'password';
                    showPasswordButton.innerHTML = '<i class="fa fa-eye"></i>';
                }
            });

            showPasswordConfirmButton.addEventListener('click', function() {
                if (passwordConfirmField.type === 'password') {
                    passwordConfirmField.type = 'text';
                    showPasswordConfirmButton.innerHTML = '<i class="fa fa-eye-slash"></i>';
                } else {
                    passwordConfirmField.type = 'password';
                    showPasswordConfirmButton.innerHTML = '<i class="fa fa-eye"></i>';
                }
            });

            // Function to check if password and password confirm match
            function checkPasswordMatch() {
                if (passwordField.value !== passwordConfirmField.value) {
                    passwordConfirmField.classList.add('is-invalid');
                    passwordMismatchMessage.style.display = 'block';
                    return false;
                } else {
                    passwordConfirmField.classList.remove('is-invalid');
                    passwordMismatchMessage.style.display = 'none';
                    return true;
                }
            }

            // Listen for input events on both fields
            passwordField.addEventListener('input', checkPasswordMatch);
            passwordConfirmField.addEventListener('input', checkPasswordMatch);

            // Validate password according to the new requirements
            passwordField.addEventListener('input', function() {
                const password = passwordField.value;
                const lengthValid = password.length >= 8;
                const characterValid = /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/.test(
                    password);
                const uppercaseValid = /[A-Z]/.test(password);

                if (lengthValid && characterValid && uppercaseValid) {
                    passwordInfo.textContent = 'Password memenuhi persyaratan';
                    passwordInfo.style.color = 'green';
                } else {
                    passwordInfo.textContent =
                        'Password minimal 8 karakter, terdiri dari huruf, angka, simbol, dan memiliki huruf kapital minimal 1 huruf besar.';
                    passwordInfo.style.color = 'red';
                }
            });

            form.addEventListener('submit', function(event) {
                if (passwordField.value !== passwordConfirmField.value) {
                    event.preventDefault(); // Mencegah pengiriman form

                    Swal.fire({
                        icon: 'error',
                        title: 'Kesalahan!',
                        text: 'Password dan konfirmasi password harus sesuai.',
                    });
                }
            });
        });
    </script>
@endsection
