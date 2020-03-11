@extends('layout.app')

@section('title')
anggota page
@endsection


@section('content')

    <h3>{!! $title !!}</h3>
    
        	<form method="POST" action="../update/{!! $data->id_anggota !!}">
        		@csrf

                <div class="form-group">
                  <input type="text" value="{!! $data->nama_anggota !!}" name="nama_anggota">
                </div>
                <div class="form-group">
                    <input type="text" value="{!! $data->alamat !!}" name="alamat">
                </div>
                <div class="form-group">
                    <input type="text" value="{!! $data->no_telpon !!}" name="no_telpon">
                </div>
                <div class="box-footer clearfix">
                  <button type="sumbit" class="pull-right btn btn-default" id="sendEmail">simpan
                    <i class="fa fa-arrow-circle-right"></i></button>
                </div>
        	</form>
        		
        {!! $data->nama_anggota !!}
@endsection