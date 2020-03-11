@extends('layout.app')

@section('title')
home page
@endsection


@section('content')
<div class="flex-center position-ref full-height">
    <h1>{!! $title !!}</h1>
    <div class="content">
        <div class="title m-b-md">
        </div>
        <a href="{{route('pasien/create')}}" class="btn btn-primary btn-sm">Add</a>
        <table class="table table-bordered table-striped">
        	<thead>
        		<th>ID</th>
                <th>ID Pasien</th>
        		<th>Nama Pasien</th>
        		<th>Alamat</th>
                <th>Telepon</th>
                <th>RT/RW</th>
                <th>Kelurahan</th>
                <th>Tanggal Lahir</th>
        		<th>Jenis Kelamin</th>
        		<th>Aksi</th>
        	</thead>
        	<tbody>
        		@foreach($pasien as $c)
        		<tr>
        			<td>{{ $c->id }}</td>
                    <td>{{ $c->id_pasien }}</td>
        			<td>{{ $c->nama_pasien }}</td>
        			<td>{{ $c->alamat }}</td>
                    <td>{{ $c->no_telepon }}</td>
                    <td>{{ $c->rt_rw }}</td>
                    <td>{{ $c->kelurahan }}</td>
                    <td>{{ $c->tgl_lahir }}</td>
        			<td>{{ $c->jenis_kelamin }}</td>
        			<td>
        				<a href="./pasien/show/{{ $c->id }}" class="btn btn-default btn-sm">Edit</a>
        				<a href="./pasien/delete/{{ $c->id }}" class="btn btn-danger btn-sm">Delete</a>
        			</td>
        		</tr>
        		@endforeach
        	</tbody>
        </table>
    </div>
</div>
@endsection