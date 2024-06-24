<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;


    /**
     *@var array
     */

    protected $fillable = [
        'nama', 
        'tanggal',
        'alamat', 
        'jabatan',
        'status',
        ];

}
