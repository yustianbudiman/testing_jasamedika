@extends('layout.app')

@section('title')
keurahan update
@endsection


@section('content')

    <h3>{!! $title !!}</h3>
    
        	<form method="POST" action="../update">
        		@csrf

                <div class="form-group">
                    <label> Nama Pasien</label>
                  <input type="hidden" name="id" value="{!! $data->id!!}">
                  <input type="text" name="nama_pasien" value="{!! $data->nama_pasien!!}">
                </div>
                <div class="form-group">
                    <label> Alamat</label>
                    <input type="text" name="alamat" value="{!! $data->alamat!!}">
                </div>
                <div class="form-group">
                    <label> Telepon</label>
                    <input type="text" name="no_telepon" value="{!! $data->no_telepon!!}">
                </div>
                <div class="form-group">
                    <label> RT/RW</label>
                    <input type="text" name="rt_rw" value="{!! $data->rt_rw!!}">
                </div>
                <div class="form-group">
                    <label> Kelurahan</label>
                    <select name="kelurahan">
                        @foreach($kelurahan as $c)
                        <option value="{{ $c->id }}">{{ $c->nama_kelurahan }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label> Tanggal Lahir</label>
                    <input type="text" name="tgl_lahir" placeholder="yyyy-mm-dd" value="{!! $data->tgl_lahir!!}">
                </div>
                <div class="form-group">
                    <label> Jenis Kelamin</label>
                    <select name="jenis_kelamin">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="box-footer clearfix">
                  <button type="sumbit" class="pull-right btn btn-default" id="sendEmail">simpan
                    <i class="fa fa-arrow-circle-right"></i></button>
                </div>
        	</form>
        		
@endsection