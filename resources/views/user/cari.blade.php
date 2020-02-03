@extends('layout')

@section('title')
Cari Keluhan
@endsection

@section('content')
<div class="row mt-5">
    <div class="offset-md-2 col-md-8">
        <h1 class="text-center mb-4">Cari Keluhan</h1>
        <div class="row">
            <div class="col-md-6">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="cari" placeholder="Cari Keluhan Cth. 901283213">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-outline-secondary">Cari</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-6">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="cari" placeholder="Cari NIK Cth. 9010293192938">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-outline-secondary">Cari</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-12">
                <div class="card my-3 border-success">
                    <div class="card-body">
                        <h5 class="card-title">2120871 | NIK:1928301923</h5>
                        <span class="badge badge-pill badge-primary">Kesehatan</span>
                        <span class="badge badge-pill badge-primary">2020-11-11</span>
                        <span class="badge badge-pill badge-primary"></span>
                        <p class="card-text mt-2">Deskripsi Tentang Keluhan.bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla </p>
                        <span class="btn btn-info btn-sm">Status : Selesai</span>
                        <a href="#" class="mx-1 btn btn-primary btn-sm float-right"><img src="https://image.flaticon.com/icons/svg/456/456115.svg" alt="" width="25px"></a>
                        <a href="#" class="mx-1 btn btn-danger btn-sm float-right"><img src="https://image.flaticon.com/icons/svg/1455/1455915.svg" alt="" width="25px"></a>
                    </div>
                </div>
            </div>


        </div>
    </div>
    @endsection