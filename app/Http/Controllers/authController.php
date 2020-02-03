<?php

namespace App\Http\Controllers;

use App\civil;
use App\report;
use App\aspiration;
use App\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function auth(Request $req)
    {
        $this->validate($req,
            ['username' => 'required'],
            ['password' => 'required']
        );
        $user = $req->input('username');
        $pass = $req->input('password');

        $users = admin::where('username' , $user)->get();

        if (Auth::attempt(['email' => $users->email, 'password' => $users->password, 'active' => 1])) {
            return 'berhasil';
        }else{
            return 'gagal';
        }
    }
}
