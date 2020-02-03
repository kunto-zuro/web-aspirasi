@extends('layout')

@section('title')
Complaint
@endsection

@section('content')
<div class="row">
    <div class="offset-md-4 col-md-4 ">
        <div class="d-block text-center mt-5">
            <img src="https://image.flaticon.com/icons/svg/1997/1997427.svg" alt="" width="100px" height="100px">
        </div>

        <form action="/insert" method="post">
            @csrf
            <input type="hidden" name="nik" value="{{$nik}}">
            <div class="form-group">
                <label for="">Jenis Keluhan</label>
                <select name="jenis_aspirasi" id="" class="form-control">
                    @foreach($aspirasi as $a)
                    <option>{{ $a->jenis_aspirasi }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Lokasi</label>
                <input type="text" class="form-control" name="lokasi">
            </div>
            <div class="form-group">
                <label for="">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" id="" rows="5"></textarea>
            </div>
            <div class="d-block text-center mt-4">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection