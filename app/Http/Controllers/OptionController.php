<?php

namespace App\Http\Controllers;

use App\Models\MasterKecamatan;
use App\Models\MasterKelurahan;
use App\Models\MasterKodepos;
use App\Models\MasterKota;
use App\Models\MasterProvinsi;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function getProvinsi(){
        $data = MasterProvinsi::where('nama_provinsi', 'LIKE', '%'.request('q').'%');
        return response()->json($data);
    }
    public function getKota($id){
        $data = MasterKota::where('id_provinsi', $id)->where('nama_kota', 'LIKE', '%'.request('q').'%');
        return response()->json($data);
    }
    // public function getKota($provinsi_id)
    // {
    // $kota = MasterKota::where('id_provinsi', $provinsi_id)->get();
    // return response()->json($kota);
    // }

    // public function getKecamatan($kota_id)
    // {
    // $kecamatan = MasterKecamatan::where('id_kota', $kota_id)->get();
    // return response()->json($kecamatan);
    // }

    // public function getKelurahan($kecamatan_id)
    // {
    // $kelurahan = MasterKelurahan::where('id_kecamatan', $kecamatan_id)->get();
    // return response()->json($kelurahan);
    // }
    //  public function getKodepos($kelurahan_id)
    //  {
    //  $kodepos = MasterKodepos::where('id_kelurahan', $kelurahan_id)->get();
    //  return response()->json($kodepos);
    //  }
}
