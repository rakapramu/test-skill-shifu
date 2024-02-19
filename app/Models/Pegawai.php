<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'nip',
        'tempat_lahir',
        'tanggal_lahir',
        'province_id',
        'kota_id',
        'kode_kota',
        'alamat_lengkap',
        'status'
    ];
}
