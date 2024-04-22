<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterKecamatan extends Model
{
    use HasFactory;
    protected $table = 'master_kecamatan';
    protected $primaryKey = 'id_kecamatan';
    protected $fillable = [
    'id_kecamatan',
    'nama_kecamatan'
    ];
    public $timestamps = false;

    // Relasi dengan Kota
    public function kota()
    {
    return $this->belongsTo(MasterKota::class, 'id_kota');
    }

    // Relasi dengan Kelurahan
    public function kelurahan()
    {
    return $this->hasMany(MasterKelurahan::class, 'id_kecamatan');
    }
}
