<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Buku;
use \App\Anggota;
use \App\Peminjaman;

class PeminjamanController extends Controller{

	public function index(){
		$test= new Peminjaman();
		$data = $test->joinData();
		return view('peminjaman.index',['title'=>'Halaman peminjaman',
								  'data'=>$data
									]);
	}
	public function create(){
		//$data= Buku::where(['id_buku'=> $id])->firstOrFail();
		return view('peminjaman.form_create',['title'=>'Halaman peminjaman']);
	}
	public function store(){
		$data = new Buku;

        $data->judul_buku = request('judul_buku');
        $data->pengarang  = request('pengarang');
        $data->penerbit	  = request('penerbit');

        $data->save();
        return redirect('buku');
	}
	public function showOne($id){
		$data= Buku::where(['id_buku'=> $id])->firstOrFail();
		return view('buku.form_update',['title'=>'Halaman buku',
									'data'=>$data
									]);
	}
	public function update($id){
		$data=['judul_buku' => request('judul_buku'),
			   'pengarang'	=> request('pengarang'),
			   'penerbit'	=> request('penerbit')
				];

		Buku::where('id_buku', $id)->update($data);
		return redirect('buku');
	}

	public function delete($id){
		$deletedRows = buku::where('id_buku', $id)->delete();
		return $deletedRows;
	}
	
}