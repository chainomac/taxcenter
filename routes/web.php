<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\OptionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();
Route::get('login',[AuthController::class,'index'])->name('login');
Route::get('register-umum',[AuthController::class,'register_umum'])->name('register-umum');
Route::get('register-pegawai',[AuthController::class,'register_pegawai'])->name('register-pegawai');
Route::get('register-mahasiswa',[AuthController::class,'register_mahasiswa'])->name('register-mahasiswa');
Route::get('dashboard',[AuthController::class,'dashboard'])->name('dashboard');
// Auth::routes(); untuk simpan data register dan login
Route::post('proses_login',[AuthController::class,'proses_login'])->name('proses.login');
Route::post('proses_register_pegawai',[AuthController::class,'proses_register_pegawai'])->name('proses.register_pegawai');
Route::post('proses_register_mahasiswa',[AuthController::class,'proses_register_mahasiswa'])->name('proses.register_mahasiswa');
Route::post('proses_register_umum',[AuthController::class,'proses_register_umum'])->name('proses.register_umum');

Route::post('logout',[AuthController::class,'logout'])->name('logout');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Dropdown Provinsi, Kota, Kecamatan, Kelurahan, Kodepos
Route::get('selectProv', [OptionController::class, 'getProvinsi'])->name('getProvinsi.index');
Route::get('selectKota/{$id}', [OptionController::class, 'getKota']);
