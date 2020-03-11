<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Model;

class Anggota extends Model
{
    public $table = 'anggota';
    public $timestamps = false;

    protected $fillable = [
        'nama_anggota',
    ];
    
}
