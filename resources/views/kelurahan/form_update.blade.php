@extends('layout.app')

@section('title')
keurahan update
@endsection


@section('content')

    <h3>{!! $title !!}</h3>
    
        	<form method="POST" action="../update">
        		@csrf

                <div class="form-group">
                    <label> Nama Kelurahan</label>
                  <input type="hidden" name="id" value="{{ $data->id }}">
                  <input type="text" value="{!! $data->nama_kelurahan !!}" name="nama_kelurahan">
                </div>
                <div class="form-group">
                    <label> Nama Kecmatan</label>
                    <input type="text" value="{!! $data->nama_kecamatan !!}" name="nama_kecamatan">
                </div>
                <div class="form-group">
                    label> Nama Kota</label>
                    <input type="text" value="{!! $data->nama_kota !!}" name="nama_kota">
                </div>
                <div class="box-footer clearfix">
                  <button type="sumbit" class="pull-right btn btn-default" id="sendEmail">simpan
                    <i class="fa fa-arrow-circle-right"></i></button>
                </div>
        	</form>
        		
@endsection