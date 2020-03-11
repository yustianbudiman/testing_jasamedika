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
        <a href="{{route('kelurahan/create')}}" class="btn btn-primary btn-sm">Add</a>
        <table class="table table-bordered table-striped">
        	<thead>
        		<th>ID</th>
        		<th>Kelurahan</th>
        		<th>Kecamatan</th>
        		<th>Kota</th>
        		<th>Aksi</th>
        	</thead>
        	<tbody>
        		@foreach($kelurahan as $c)
        		<tr>
        			<td>{{ $c->id }}</td>
        			<td>{{ $c->nama_kelurahan }}</td>
        			<td>{{ $c->nama_kecamatan }}</td>
        			<td>{{ $c->nama_kota }}</td>
        			<td>
        				<a href="./kelurahan/show/{{ $c->id }}" class="btn btn-default btn-sm">Edit</a>
        				<a href="./kelurahan/delete/{{ $c->id }}" class="btn btn-danger btn-sm">Delete</a>
        			</td>
        		</tr>
        		@endforeach
        	</tbody>
        </table>
    </div>
</div>
@endsection