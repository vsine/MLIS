<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index(Request $request,$id)
    {
        return view('admin.index',['id'=>$id]);
    }
    public function  loginout(){
        DB::table('users')->where('username',Session::get('username'))
            ->update(['last_token'=>'']);
        return redirect()->route('index.login');
    }
}
