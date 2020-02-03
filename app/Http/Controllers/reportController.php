<?php

namespace App\Http\Controllers;

use App\civil;
use App\report;
use App\aspiration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class reportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $input = new civil;
        $input->nik = $request->nik;
        $input->nama = $request->nama;
        $input->alamat = $request->alamat;

        $input->save();

        $nik = $input->nik;
        $aspirasi = aspiration::all();
        return view('user.complaint', ['nik' => $nik, 'aspirasi' => $aspirasi]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nik)
    {
        $civils = civil::where('nik', $nik)->get();

        $reports = report::where('nik', $nik)->get();
        return view('user.detail-complaint', ['civils' => $civils, 'reports' => $reports]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = new report;
        $input->status = $request->status;
        $status = $input->status;
        $affected = DB::table('reports')
            ->where('id_laporan', $id)
            ->update(['status' => $status]);
        // report::find($id)->update($request->all());
        return redirect('/get');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
