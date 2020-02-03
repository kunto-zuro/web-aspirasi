@extends('layout')

@section('title')
detail complaint
@endsection

@section('content')
<div class="row mt-3">
    <div class="col-md-12">
        <div class="jumbotron jumbotron-fluid">
            <a href="/" class="btn btn-primary ml-3 mb-3">Kembali</a>
            <table class="table table-striped">
                <tr>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Alamat</th>
                    <th>No. Laporan</th>
                    <th>Jenis Aspirasi</th>
                    <th>Lokasi</th>
                    <th>Deskripsi</th>
                </tr>
                <tr>
                    @foreach($civils as $civil)
                    <td>{{$civil->nama}}</td>
                    <td>{{$civil->nik}}</td>
                    <td>{{$civil->alamat}}</td>
                    @endforeach
                    @foreach($reports as $report)
                    <td>{{$report->id_laporan}} <b>(Ingat Kodenya)</b></td>
                    <td>{{$report->jenis_aspirasi}}</td>
                    <td>{{$report->lokasi}}</td>
                    <td>{{$report->deskripsi}}</td>
                    @endforeach
                </tr>
            </table>
            @foreach($reports as $report)

            @if($report->status == "selesai")
            <button class="btn btn-success ml-3">Status : {{$report->status}}</button>
            @elseif($report->status == "proses")
            <button class="btn btn-info ml-3">Status : {{$report->status}}</button>
            @endif

            @if($report->feedback == "belum" && $report->status == "selesai")
            <div class="d-block mr-5 float-right">
                <button type="submit" class="btn btn-primary"><img src="https://image.flaticon.com/icons/svg/456/456115.svg" alt="" width="25px"></button>
                <button type="submit" class="btn btn-danger"><img src="https://image.flaticon.com/icons/svg/1455/1455915.svg" alt="" width="25px"></button>
            </div>
            @elseif($report->feedback == "puas" && $report->status == "selesai")
            <button type="submit" class="btn btn-primary"></button>
            @elseif($report->feedback == "tidak" && $report->status == "selesai")
            <button type="submit" class="btn btn-danger">Tidak Puas</button>
            @elseif($report->status == "proses")
            <span></span>
            @endif
            @endforeach
        </div>
    </div>
</div>
<style>
    .jumbotron{
        border-radius: 15px;
    }
</style>
@endsection