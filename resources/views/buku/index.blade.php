@extends('layout.app')

@section('title')
buku page
@endsection


@section('content')
<div class="flex-center position-ref full-height">
    <h3>{!! $title !!}</h3>
    <div class="content">
        <a href="buku/create" class="pull-right btn btn-default"> Create <i class="fa fa-arrow-circle-right"></i></a>
        <table class="table table-bordered">
            <thead>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php $no=1;?>
                @foreach($data as $row)
                <tr>
                    <td>{{$no}}</td>
                    <td>{{$row->judul_buku}}</td>
                    <td>{{$row->pengarang}}</td>
                    <td>{{$row->penerbit}}</td>
                    <td><a href="buku/showone/{{ $row->id_buku}}">aksi</a></td>
                <tr>
                    <?php $no++; ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

