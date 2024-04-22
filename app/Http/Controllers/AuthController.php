<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\Fakultas;


class AuthController extends Controller
{
    //
    public function index()
    {
        // menampilkan halaman resource -> views -> auth -> login.blade.php
        return view('auth.login');
    }

    public function register_pegawai()
    {
        // menampilkan halaman resource -> views -> auth -> register.blade.php
        return view('auth.register-pegawai');
    }
    public function register_mahasiswa()
    {
        // menampilkan halaman resource -> views -> auth -> register.blade.php
        //select fakultas 
        $fakultas = Fakultas::all(); // Mengambil semua data fakultas dari database
        return view('auth.register-mahasiswa', compact('fakultas')); // Mengirimkan data fakultas dan provinsi ke view
    }
    public function register_umum()
    {
        // menampilkan halaman resource -> views -> auth -> register.blade.php
        return view('auth.register-umum');
    }
    public function proses_login(Request $request)
    {

        // isi credential hanya berupa username dan password
        $credentials =  $request->only('email', 'password');
        //validasi menggunakan Illuminate\Support\Facades\Validator
        //isi field validasi dan rules nya yaitu wajib di isi
        $validate = Validator::make($credentials, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // jika terdapat field yang kosong
        if ($validate->fails()) {
            //kembali ke halaman login & tampilkan error pada setiap inputnya
            return back()->withErrors($validate)->withInput();
        }

        // verifikasi data user pada kolom email dan password sesuai atau belum
        if (Auth::attempt($credentials)) {
            //jika sesuai maka jalankan fungsi dashboard
            return redirect()->intended('dashboard')->with('success', 'Successfully Login');
        }
        // kembali ke halaman login dan tampilkan pesan error pada login_error
        return redirect('login')->withInput()->withErrors(['login_error' => 'Username or password are wrong!']);
    }

    public function dashboard()
    {
        //  cek berhasil login 
        if (Auth::check()) {
            return view('home');
        }

        return redirect('login')->with('You dont have access');
    }

    public function proses_register_umum(Request $request)
    {

        //validasi menggunakan Illuminate\Support\Facades\Validator
        //isi field validasi dan rules nya yaitu wajib di isi
        $validate = Validator::make($request->all(), [
            'fullname' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'password_confirm' => 'required|confirmed',
        ]);
        // jika terdapat field yang kosong
        if ($validate->fails()) {
            //kembali ke halaman login & tampilkan error pada setiap inputnya
            return back()->withErrors($validate)->withInput();
        }

        // tambahkan field level dan kita isi dengan admin
        $request['level'] = 'admin';
        //      panggil model User dan jalankan fungsi ORM create untuk melakukan insert semua data
        User::create($request->all());

        return redirect('dashboard')->with('success', 'You have successfully register');
    }
    public function proses_register_mahasiswa(Request $request)
    {

        //validasi menggunakan Illuminate\Support\Facades\Validator
        //isi field validasi dan rules nya yaitu wajib di isi
        $validate = Validator::make($request->all(), [
            'fullname' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'password_confirm' => 'required|confirmed',
        ]);
        // jika terdapat field yang kosong
        if ($validate->fails()) {
            //kembali ke halaman login & tampilkan error pada setiap inputnya
            return back()->withErrors($validate)->withInput();
        }

        // tambahkan field level dan kita isi dengan admin
        $request['level'] = 'admin';
        // panggil model User dan jalankan fungsi ORM create untuk melakukan insert semua data
        User::create($request->all());

        return redirect('dashboard')->with('success', 'You have successfully register');
    }
    public function proses_register_pegawai(Request $request)
    {
        //validasi menggunakan Illuminate\Support\Facades\Validator
        //isi field validasi dan rules nya yaitu wajib di isi
        $validate = Validator::make($request->all(), [
            'fullname' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'password_confirm' => 'required|confirmed',
        ]);
        // jika terdapat field yang kosong
        if ($validate->fails()) {
            //kembali ke halaman login & tampilkan error pada setiap inputnya
            return back()->withErrors($validate)->withInput();
        }

        // tambahkan field level dan kita isi dengan admin
        $request['level'] = 'admin';
        // panggil model User dan jalankan fungsi ORM create untuk melakukan insert semua data
        User::create($request->all());

        return redirect('dashboard')->with('success', 'You have successfully register');
    }
    //fungsi logout
    public function logout()
    {
        //  clear session dan memberitahu auth dengan status logout
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
