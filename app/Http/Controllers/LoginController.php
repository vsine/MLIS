<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login_verify(Request $request)
    {
        //$pasw=str_replace(' ','+',$request->input('password'));
        $pasw_key=$request->input('password');
        $pasw_fact=RSAUtils::privateDecrypt($pasw_key,RSAUtils::PRIVATE_KEY);
        $request['password']=$pasw_fact;
        $request->validate(['username'=>'required|min:5',
                            'password'=>'min:6',
        ]);
        $user=$request->input('username');
        $user_obj=DB::table('users')->where('username',$user);
        $key_verify=($pasw_key==$user_obj->value('last_key'));
        $pasw_verify=$user_obj->where('password',$pasw_fact)->exists();
        if($pasw_verify&&
            !($key_verify)){
            $user_obj->update([
                'last_token' => Session::token(),
                'last_key' => $pasw_key
            ]);
            Session::put('username',$user);
            return 'ok';
        }else if (!($pasw_verify)){
            return 'fail';
        }else{
            return 'expire';
        }

    }
    public function login_page(){
        if(Session::token()==DB::table('users')->value('last_token')){
            return redirect()->route('admin.index');
        }
        return view('login');
    }
}
