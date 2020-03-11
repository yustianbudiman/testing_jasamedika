<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Buku;

class BukuController extends Controller{

	public function index(){
		$data= Buku::all();
		return view('buku.index',['title'=>'Halaman buku',
								  'data'=>$data
									]);
	}
	public function create(){
		//$data= Buku::where(['id_buku'=> $id])->firstOrFail();
		return view('buku.form_create',['title'=>'Halaman buku']);
	}
	public function store(){
		$data = new Buku;

        $data->judul_buku = request('judul_buku');
        $data->pengarang 		= request('pengarang');
        $data->penerbit	= request('penerbit');

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
			   'pengarang'		  => request('pengarang'),
			   'penerbit'	  => request('penerbit')
				];

		Buku::where('id_buku', $id)->update($data);
		return redirect('buku');
	}

	public function delete($id){
		$deletedRows = buku::where('id_buku', $id)->delete();
		return $deletedRows;
	}
	
}