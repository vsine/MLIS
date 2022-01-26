<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $request->validate(['username'=>'required|min:5',
            'password'=>'required|min:5'
        ]);

        return redirect('admin');
    }
}
