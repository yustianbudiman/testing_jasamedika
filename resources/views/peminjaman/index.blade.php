@extends('layout.app')

@section('title')
peminjaman page
@endsection


@section('content')
<div class="flex-center position-ref full-height">
    <h3>{!! $title !!}</h3>
    <div class="content">
        <a href="peminjaman/create" class="pull-right btn btn-default"> Create <i class="fa fa-arrow-circle-right"></i></a>
        <table class="table table-bordered">
            <thead>
                <th>No</th>
                <th>Nama anggota</th>
                <th>Alamat</th>
                <th>Tanggal</th>
                <th>Judul Buku</th>
                <th>Jumlah</th>
            </thead>
            <tbody>
              <?php $no=1;?>
                @foreach($data as $row)
                <tr>
                    <td>{{$no}}</td>
                    <td>{{$row->nama_anggota}}</td>
                    <td>{{$row->alamat}}</td>
                    <td>
                        @foreach(getTotalCount($row->id_peminjaman) as $key)
                            <span class="fa fa-book"></span> {{ $key->judul_buku }}<br>
                        @endforeach
                    </td>
                    <td>{{$row->tanggal}}</td>
                    <td><a href="buku/showone/{{$row->id_anggota}}">aksi</a></td>
                <tr>
                    <?php $no++; ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection