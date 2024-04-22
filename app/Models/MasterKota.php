<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterKota extends Model
{
    use HasFactory;
    protected $table = 'master_kota';
    protected $fillable = [
    'id_kota',
    'nama_kota'
    ];
    protected $primaryKey = 'id_kota';
    public $timestamps = false;

    // Relasi dengan Provinsi
    public function provinsi()
    {
    return $this->belongsTo(MasterProvinsi::class, 'id_provinsi');
    }

    // Relasi dengan Kecamatan
    public function kecamatan()
    {
    return $this->hasMany(MasterKecamatan::class, 'id_kota');
    }
}
