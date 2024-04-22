<?php

namespace App\Livewire;

use App\Models\MasterKecamatan;
use App\Models\MasterKelurahan;
use App\Models\MasterKodepos; // Added MasterKodepos model
use App\Models\MasterKota;
use App\Models\MasterProvinsi;
use Livewire\Component;

class DependentDropdown extends Component
{
    public $provinsi;

    public $kota;

    public $kecamatan;

    public $kelurahan;

    public $selectedProvinsi = null;

    public $selectedKota = null;

    public $selectedKecamatan = null;

    public $selectedKelurahan = null;

    public $kodepos; // Added kodepos property

    public function mount()
    {
        $this->provinsi = MasterProvinsi::all();
    }

    public function updatedSelectedProvinsi($provinsi)
    {
        if (!is_null($provinsi)){
            $this->kota = MasterKota::where('id_provinsi', $provinsi)->get();
        }
    }

    public function updatedSelectedKota($kota)
    {
        if (!is_null($kota)) {
            $this->kecamatan = MasterKecamatan::where('id_kota', $kota)->get();
        }
    }

    public function updatedSelectedKecamatan($kecamatan)
    {
        // dd($kecamatan);
        if (!is_null($kecamatan)) {
            $this->kelurahan = MasterKelurahan::where('id_kecamatan', $kecamatan)->get();
        }
    }

    public function updatedSelectedKelurahan($kelurahan)
    {
        if (!is_null($kelurahan)) {
            $selectedKodepos = MasterKodepos::where('id_kelurahan', $kelurahan)->first();

            if ($selectedKodepos) {
                $this->kodepos = $selectedKodepos->kodepos;
            } else {
                $this->kodepos = 'Kodepos Tidak Ditemukan';
            }
        }
    }

    public function render()
    {
        return view('livewire.dependent-dropdown');
    }
}
