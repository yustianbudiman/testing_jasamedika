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
        selamat datang <?php $data = session()->all();
        var_dump($data);
                ?>
    </div>
</div>
@endsection