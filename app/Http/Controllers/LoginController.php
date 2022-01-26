<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $pasw=str_replace(' ','+',$request->input('password'));
        $realpasw=RSAUtils::privateDecrypt($pasw,RSAUtils::PRIVATE_KEY);
        $request['password']=$realpasw;
        $request->validate(['username'=>'required|min:5',
            'password'=>'min:6',
        ]);

        return ;
    }
}
