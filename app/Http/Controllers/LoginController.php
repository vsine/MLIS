<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login_api(Request $request)
    {
        $pasw=str_replace(' ','+',$request->input('password'));
        $realpasw=RSAUtils::privateDecrypt($pasw,RSAUtils::PRIVATE_KEY);
        $request['password']=$realpasw;
        $request->validate(['username'=>'required|min:5',
                            'password'=>'min:6',
        ]);
        $user=$request->input('username');
        $pasw=$request->input('password');

        if(DB::table('users')->where('username',$user)
            ->where('password',$pasw)->exists()){

        }else{
           return redirect('login');
        }

        return 'login';
    }
    public function login_page(){
        return view('login');
    }
}
