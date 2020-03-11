<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Anggota;

class AnggotaController extends Controller{

	public function index(){
		$data= Anggota::all();
		return view('anggota.index',['title'=>'Halaman bukku',
									'data'=>$data
									]);
	}
	public function create(){
		//$data= Anggota::where(['id_anggota'=> $id])->firstOrFail();
		return view('anggota.form_create',['title'=>'Halaman anggota']);
	}
	public function store(){
		$data = new Anggota;

        $data->nama_anggota = request('nama_anggota');
        $data->alamat 		= request('alamat');
        $data->no_telpon	= request('no_telpon');

        $data->save();
        return redirect('anggota');
	}
	public function showOne($id){
		$data= Anggota::where(['id_anggota'=> $id])->firstOrFail();
		return view('anggota.form_update',['title'=>'Halaman anggota',
									'data'=>$data
									]);
	}
	public function update($id){
		$data=['nama_anggota' => request('nama_anggota'),
			   'alamat'		  => request('alamat'),
			   'no_telpon'	  => request('no_telpon')
				];

		Anggota::where('id_anggota', $id)->update($data);
		return redirect('anggota');
	}

	public function delete($id){
		$deletedRows = Anggota::where('id_anggota', $id)->delete();
		return $deletedRows;
	}
	
}