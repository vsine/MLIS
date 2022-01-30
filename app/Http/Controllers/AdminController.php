<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index',['dd'=>['123']]);
    }
    public function  loginout(){
        DB::table('users')->where('username',Session::get('username'))
            ->update(['last_token'=>'']);
        return redirect()->route('index.login');
    }
}
