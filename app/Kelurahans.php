<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kelurahans extends Model
{
    public $table = 'kelurahans';
    public $timestamps = false;

    protected $fillable = [
        'nama_kelurahan',
        'nama_kecamatan',
        'nama_kota',
    ];
}
