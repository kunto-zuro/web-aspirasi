@extends('layout')

@section('title')
Data User
@endsection

@section('content')
<div class="row">
    <div class="offset-md-4 col-md-4" class="text-center">
        <!-- <h1 class="text-center">Data User</h1> -->
        <div class="d-block text-center mt-5">
            <img src="https://image.flaticon.com/icons/svg/1997/1997988.svg" alt="" class="" width="100px" height="100px">
        </div>

        <form action="{{ route('report.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">NIK</label>
                <input type="text" class="form-control" name="nik">
            </div>
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="nama" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <textarea name="alamat" id="" rows="5" class="form-control"></textarea>
            </div>
            <div class="d-block text-center mt-4">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection