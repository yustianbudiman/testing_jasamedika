@extends('layout.app')

@section('title')
Kelurahan Add
@endsection


@section('content')
    <h3>{!! $title !!}</h3>
    
        	<form method="POST" action="store">
        		@csrf
                <div class="form-group">
                    <label> Nama Kelurahan</label>
        		  <input type="text" name="nama_kelurahan">
        		</div>
                <div class="form-group">
                    <label> Nama Kecmatan</label>
                    <input type="text" name="nama_kecamatan">
        		</div>
                <div class="form-group">
                    <label> Nama Kota</label>
                    <input type="text" name="nama_kota">
        		</div>
                <div class="box-footer clearfix">
                  <button type="sumbit" class="pull-right btn btn-default" id="sendEmail">simpan
                    <i class="fa fa-arrow-circle-right"></i></button>
                </div>
        	</form>
@endsection