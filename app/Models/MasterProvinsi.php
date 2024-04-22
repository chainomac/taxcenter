<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterProvinsi extends Model
{
    use HasFactory;
    protected $table = 'master_provinsi';
    protected $fillable = [
    'id_provinsi',
    'nama_provinsi'
    ];
    protected $primaryKey = 'id_provinsi';
    public $timestamps = false;

    // Relasi dengan Kota
    public function kota()
    {
    return $this->hasMany(MasterKota::class, 'id_provinsi');
    }
}
