@extends('layout.app')

@section('title')
buku page
@endsection


@section('content')
    <h3>{!! $title !!}</h3>
    
        	<form method="POST" action="store">
        		@csrf
                <div class="form-group">
        		  <input type="text" name="judul_buku">
        		</div>
                <div class="form-group">
                    <input type="text" name="pengarang">
        		</div>
                <div class="form-group">
                    <input type="text" name="penerbit">
        		</div>
                <div class="box-footer clearfix">
                  <button type="sumbit" class="pull-right btn btn-default" id="sendEmail">simpan
                    <i class="fa fa-arrow-circle-right"></i></button>
                </div>
        	</form>
@endsection