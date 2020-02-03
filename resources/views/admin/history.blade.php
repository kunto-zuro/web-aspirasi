@extends('layout')

@section('title', 'History Admin')

@section('content')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <a href="index.html" class="ml-auto">Logout</a>
    </div>
</nav>
<!-- Akhir Navbar -->
<div class="row">
    <div class="offset-md-2 col-md-8">
        <div class="row my-4">
            <div class="col-md-6">
                <h2>History Admin</h2>
            </div>
            <div class="col-md-6 ">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="cari" placeholder="Cari NIK Cth. 9010293192938">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-outline-secondary">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card my-3 border-success">
            <div class="card-body">
                <h5 class="card-title">2120871 | NIK:1928301923</h5>
                <span class="badge badge-pill badge-primary">Kesehatan</span>
                <span class="badge badge-pill badge-primary">2020-11-11</span>
                <span class="badge badge-pill badge-primary"></span>
                <p class="card-text mt-2">Deskripsi Tentang Keluhan.bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
                <span class="btn btn-success btn-sm">Status : Selesai</span>
                <a href="#" class="mx-1 btn btn-primary btn-sm float-right"><img src="https://image.flaticon.com/icons/svg/456/456115.svg" alt="" width="25px"></a>
                <!-- <a href="#" class="mx-1 btn btn-danger btn-sm float-right"><img src="https://image.flaticon.com/icons/svg/1455/1455915.svg" alt="" width="25px"></a> -->
            </div>
        </div>
    </div>
</div>
@endsection