<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

class TaskController extends Controller
{
    public function index()
    {
        if(!Session::get('task_check')){
            return 'fail';
        }
        //return response('ggg')->header('Content-type','text/plain');
        return 'ok';
    }


}
