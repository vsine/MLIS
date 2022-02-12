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
        //$user_row->update(['cart'=>json_encode($this->cart_moudel)]);
        $array = json_decode($user_row
        ->value('cart'),true);
        return $array;
    }
    public function cart(Request $request){
        if(!Session::get('task_check'))
            return 'login_fail';

        $user_row=DB::table('users')->where('username',Session::get('username'));
        $array= json_decode($user_row->value('cart'),true);
        $operation=$request->get('oper');
        switch ($operation){
            //加入购物车
            case '1':
                if(array_key_exists(intval($request->get('number')),$array['list']))
                    $array['list'][$request->get('number')]+=$operation=$request->get('quantity');
                else
                    $array['list'][intval($request->get('number'))]=intval($operation=$request->get('quantity'));
                $user_row->update(['cart'=>json_encode($array)]);
                return '200';
                break;
            //修改数量
            case '2':

                break;
            default:
                return '300';
                break;
        }
        return 'exit';
    }

    public  function libary(){
        if(!Session::get('task_check'))
            return 'login_fail';
        $user_row=DB::table('users')->where('username',Session::get('username'));
    }
}
