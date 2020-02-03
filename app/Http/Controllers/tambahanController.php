<?php

namespace App\Http\Controllers;

use App\civil;
use App\report;
use App\aspiration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tambahanController extends Controller
{
    // tambahan insert ke tabel reports
    public function insert(Request $req){

        $insert = new report;
        $insert->id_laporan = date("dhs") . rand(11, 99);
        $insert->nik = $req->nik;
        $insert->jenis_aspirasi = $req->jenis_aspirasi;
        $insert->lokasi = $req->lokasi;
        $insert->deskripsi = $req->deskripsi;
        $insert->status = 'proses';
        $insert->feedback = 'belum';
        $insert->save();

        $nik = $insert->nik;

        return  redirect('report/'.$nik);
    }

    public function data_admin()
    {
        $data = report::all(); 
        return view('admin.dashboard', compact('data'));
    }

    public function update($id){
        $selesai = report::find($id);
        $selesai->status = 'selesai';
        $selesai->save();

        return 'berhasil';
    }
}
