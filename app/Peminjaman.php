<?php

namespace App;


use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Support\Facades\DB;

class Peminjaman extends Model
{
    public $table = 'peminjaman';
    public $timestamps = false;

    protected $fillable = [
        'nama_anggota',
    ];
    
    public function joinData(){
    	$users = DB::select('select a.*,b.nama_anggota,b.alamat from peminjaman a inner join anggota b on a.id_anggota=b.id_anggota');

    	return $users;
    	// return $this->hasMany('App\Anggota');
    }
}
