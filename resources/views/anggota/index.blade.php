@extends('layout.app')

@section('title')
anggota page
@endsection


@section('content')
<div class="flex-center position-ref full-height">
    <h3>{!! $title !!}</h3>
    <div class="content">
        <a href="anggota/create" class="pull-right btn btn-default"> Create <i class="fa fa-arrow-circle-right"></i></a>
        <table class="table table-bordered">
            <thead>
                <th>No</th>
                <th>nama anggota</th>
                <th>alamat</th>
                <th>no telepon</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php $no = 1; ?>
            @foreach($data as $row)
                <tr>
                    <td>{{$no}}</td>
                    <td>{{$row->nama_anggota}}</td>
                    <td>{{$row->alamat}}</td>
                    <td>{{$row->no_telpon}}</td>
                    <td><a href="anggota/showone/{{ $row->id_anggota}}">Edit</a></td>
                </tr>
                <?php $no++; ?>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection