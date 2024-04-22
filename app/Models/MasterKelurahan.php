<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterKelurahan extends Model
{
    use HasFactory;
     protected $table = 'master_kelurahan';
     protected $primaryKey = 'id_kelurahan';
     protected $fillable = [
     'id_kelurahan',
     'nama_kelurahan'
     ];
     public $timestamps = false;

     // Relasi dengan Kecamatan
     public function kecamatan()
     {
     return $this->belongsTo(MasterKecamatan::class, 'id_kecamatan');
     }

     public function kodepos()
     {
     return $this->belongsTo(MasterKodepos::class, 'id_kelurahan');
     }
}
