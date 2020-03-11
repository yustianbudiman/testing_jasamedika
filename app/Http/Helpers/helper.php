<?php
use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Support\Facades\DB;

function getTotalCount($x) {
    $buku = DB::select('select b.*,a.id_buku from peminjaman_detail a inner join buku b on a.id_buku=b.id_buku where a.id_peminjaman=1');

    	return $buku;

}
