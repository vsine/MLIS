<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class TaskController extends Controller
{
    public $marks_moudel=array('title'=>'老师',
        'list'=>[
        ['仓库','fa-book',1,2,3],
        ['管理','fa-tasks',4,5,6],
        ['对外','fa-glass',7]],
        'editlibary'=>true
    );
    public $cart_moudel=array(
        'list'=>[]
    );
    public function index()
    {
        if(!Session::get('task_check'))
            return 'fail';
        //return response('ggg')->header('Content-type','text/plain');
        return 'ok';
    }

    public function test(){
        $user_row=DB::table('users')->where('username',Session::get('username'));
        $user_row->update(['cart'=>json_encode($this->cart_moudel)]);
        $json = json_decode($user_row
        ->value('cart'),true);
        return $json;
    }
    public function cart(Request $request){
        $operation=$request->get('oper');
        switch ($operation){

            default:
                return '300';
                break;
        }
    }
}
