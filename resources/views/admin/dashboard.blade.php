@extends('layout')

@section('title', 'Home Admin')

@section('content')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="dashboard-admin.html">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="histori-admin.html">Histori</a></li>
        </ul>
        <a href="/dashboard" class="ml-auto">Logout</a>
    </div>
</nav>
<!-- Akhir Navbar -->
<div class="row">
    <div class="offset-md-2 col-md-8">
        <div class="row my-4">
            <div class="col-md-6">
                <h2>Welcome Admin</h2>
            </div>
            <div class="col-md-6 ">
                <a href="/admin/history" class="btn btn-secondary float-right">History</a>
            </div>
        </div>
        @foreach($data as $d)
        <div class="card my-3 border-success">
            <div class="card-body">
                <h5 class="card-title">{{$d->id_laporan}} | NIK:{{$d->nik}}</h5>
                <span class="badge badge-pill badge-primary">{{$d->jenis_aspirasi}}</span>
                <span class="badge badge-pill badge-primary">{{$d->tanggal}}</span>
                <span class="badge badge-pill badge-primary"></span>
                <p class="card-text mt-2">{{$d->deskripsi}}</p>
                <!-- <a href="/update/{{ $d->id_laporan }}/edit" class="btn btn-info btn-sm">{{$d->status}}</a> -->
                <form action="{{ action('reportController@update', $d['id_laporan']) }}" method="post">
                    @csrf
                    @method('PUT')
                    <input type="hidden" value="selesai" name="status">
                    <button type="submit" class="btn btn-info btn-sm">Status : {{$d->status}}</button>
                </form>
                <a href="#" class="mx-1 btn btn-primary btn-sm float-right"><img src="https://image.flaticon.com/icons/svg/456/456115.svg" alt="" width="25px"></a>
                <a href="#" class="mx-1 btn btn-danger btn-sm float-right"><img src="https://image.flaticon.com/icons/svg/1455/1455915.svg" alt="" width="25px"></a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection