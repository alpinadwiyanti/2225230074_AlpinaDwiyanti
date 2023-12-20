<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = '_karyawan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'no_identitas',
        'nama',
        'jenis_kelamin',
        'jabatan',
        'tanggal_masuk',
        'alamat'
    ];
}
