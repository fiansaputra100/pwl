<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HobiModel extends Model
{
    use HasFactory;
    protected $table = 'hobi';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable = [
        'id',
        'Kode',
        'nama',
        'nama_hobi',
        'kriteria'

    ];
}
