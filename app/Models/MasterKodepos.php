<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterKodepos extends Model
{
    use HasFactory;
    protected $table = 'master_kodepos';
    protected $primaryKey = 'id_kodepos';
    protected $fillable = [
    'id_kodepos',
    'kodepos'
    ];
    public $timestamps = false;

    // Relasi dengan Provinsi
    public function provinsi()
    {
    return $this->belongsTo(MasterProvinsi::class, 'id_provinsi');
    }

    // Relasi dengan Kota
    public function kota()
    {
    return $this->belongsTo(MasterKota::class, 'id_kota');
    }

    // Relasi dengan Kecamatan
    public function kecamatan()
    {
    return $this->belongsTo(MasterKecamatan::class, 'id_kecamatan');
    }

    // Relasi dengan Kelurahan
    public function kelurahan()
    {
    return $this->belongsTo(MasterKelurahan::class, 'id_kelurahan');
    }
}
