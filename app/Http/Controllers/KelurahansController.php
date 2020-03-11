<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelurahans;

class KelurahansController extends Controller
{	
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){

    	$data=[
    			'title'=>'Rumah sakit',
    			'kelurahan'=>Kelurahans::all()
    			];
		return view('kelurahan.index')->with($data);
	}
	public function create(){
		return view('kelurahan.form_create',['title'=>'Halaman kelurahan']);
	}
	public function store(){
		$data = new Kelurahans;

        $data->nama_kelurahan = request('nama_kelurahan');
        $data->nama_kecamatan = request('nama_kecamatan');
        $data->nama_kota	  = request('nama_kota');

        $data->save();
        return redirect('kelurahan');
	}
	public function show($id){
		$data= Kelurahans::where(['id'=> $id])->firstOrFail();
		return view('kelurahan.form_update',['title'=>'Halaman kelurahan',
									'data'=>$data
									]);
	}
	public function update(Request $request){
		$data=['nama_kelurahan' => request('nama_kelurahan'),
			   'nama_kecamatan' => request('nama_kecamatan'),
			   'nama_kota'	    => request('nama_kota')
				];

		Kelurahans::where('id',$request->id)->update($data);
		return redirect('kelurahan');
	}

	public function delete($id){
		$deletedRows = Kelurahans::where('id', $id)->delete();
		return redirect('kelurahan');
	}
}
