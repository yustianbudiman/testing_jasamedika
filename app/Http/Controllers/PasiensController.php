<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasiens;
use App\Kelurahans;

class PasiensController extends Controller
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
    			'pasien'=>Pasiens::all()
    			];
		return view('pasien.index')->with($data);
	}
	public function create(){
		return view('pasien.form_create',['title'=>'Halaman pasien','kelurahan'=>Kelurahans::all()]);
	}
	public function store(){
		$data = new Pasiens;

        $data->nama_pasien = request('nama_pasien');
        $data->alamat 	   = request('alamat');
        $data->no_telepon  = request('no_telepon');
        $data->rt_rw  = request('rt_rw');
        $data->kelurahan  = request('kelurahan');
        $data->tgl_lahir  = date('Y-m-d',strtotime(request('tgl_lahir'))) ;
        $data->jenis_kelamin  = request('jenis_kelamin');

        $data->save();
        return redirect('pasien');
	}
	public function show($id){
		$data= Pasiens::where(['id'=> $id])->firstOrFail();
		return view('pasien.form_update',['title'=>'Halaman pasien',
									'data'=>$data,
									'kelurahan'=>Kelurahans::all()
									]);
	}
	public function update(Request $request){
		$data=['nama_pasien' => request('nama_pasien'),
			   'alamat' => request('alamat'),
			   'no_telepon'	    => request('no_telepon'),
			   'rt_rw'	    => request('rt_rw'),
			   'kelurahan'	    => request('kelurahan'),
			   'tgl_lahir'	    => request('tgl_lahir'),
			   'jenis_kelamin'	    => request('jenis_kelamin')
				];

		Pasiens::where('id',$request->id)->update($data);
		return redirect('pasien');
	}

	public function delete($id){
		$deletedRows = Pasiens::where('id', $id)->delete();
		return redirect('pasien');
	}
}
