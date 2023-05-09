<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluargaModel extends Model
{
    use HasFactory;
    protected $table = 'keluarga';
    protected $primaryKey = 'NIK';
    protected $keyType = 'int';
    protected $fillable = [
        'NIK',
        'nama_keluarga',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'status_perkawinan',
        'status_hubungan',
        'kewarganegaraan',
        'jenis_pekerjaan'
    ];
}
