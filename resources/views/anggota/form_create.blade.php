@extends('layout.app')

@section('title')
anggota page
@endsection


@section('content')
    <h3>{!! $title !!}</h3>
    
        	<form method="POST" action="store">
        		@csrf
                <div class="form-group">
        		  <input type="text" name="nama_anggota">
        		</div>
                <div class="form-group">
                    <input type="text" name="alamat">
        		</div>
                <div class="form-group">
                    <input type="text" name="no_telpon">
        		</div>
                <div class="box-footer clearfix">
                  <button type="sumbit" class="pull-right btn btn-default" id="sendEmail">simpan
                    <i class="fa fa-arrow-circle-right"></i></button>
                </div>
        	</form>
@endsection