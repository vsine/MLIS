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
        'judge'=>[
            'libary'=>[['8A208仓库',0],['8A206仓库',1]],
        ],
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
//        //$user_row->update(['cart'=>json_encode($this->cart_moudel)]);
//        $array = json_decode($user_row
//        ->value('cart'),true);
        $user_row->update(
            [
                'marks'=>json_encode($this->marks_moudel),
            ]
        );
        return 'ok';
    }

    public function cart(Request $request){
        if(!Session::get('task_check'))
            return 'login_fail';

        $operation=$request->get('oper');
        switch ($operation){
            //加入购物车
            case '1':
                $cart_row=DB::table('cart_master')->where('user',Session::get('username'));
                if($cart_row->where('number',$request->get('number'))->exists())
                    $cart_row->where('number',$request->get('number'))->update(
                        [
                            'quantity'=>$cart_row->where('number',$request->get('number'))->value('quantity')+$request->get('quantity')
                        ]
                    );
                else
                    $cart_row->insert([
                        'user'=>Session::get('username'),
                        'number'=>$request->get('number'),
                        'quantity'=>$request->get('quantity'),
                    ]);

                return '200';
                break;
            //修改数量
            case '2':
                $cart_row=DB::table('cart_master')->where('user',Session::get('username'));
                $cart_row->where('number',$request->get('number'))->update([
                    'quantity'=>$request->get('quantity')
                ]);
                return '200';
                break;
            case '3':
                $cart_row=DB::table('cart_master')->where('user',Session::get('username'));
                $cart_row->where('number',$request->get('number'))->delete();
                return '200';
                break;
            default:
                return '300';
                break;

        }
        return 'exit';
    }

    public  function libary(Request $request){
        if(!Session::get('task_check'))
            return 'login_fail';
        $operation = $request->input('oper');
        switch ($operation){
            case '1':
                //修改
                $user_row=DB::table('depot')->where('number',$request->input('number'));

                $user_row->update(
                    [
                        'name'=>$request->input('name'),
                        'number'=>$request->input('number'),
                        'category'=>$request->input('category'),
                        'brand'=>$request->input('brand'),
                        'model'=>$request->input('model'),
                        'quantity'=>$request->input('quantity'),
                        'unit'=>$request->input('unit'),
                        'ip'=>$request->input('ip'),
                        'supplier'=>$request->input('supplier'),
                        'marks'=>$request->input('marks'),
                    ]
                );
                return 'ok';
                break;
            case '2':
                if(DB::table('depot')->where('number',$request->input('number'))->exists())
                    return 'fail';
                DB::table('depot')->insert([
                        'name'=>$request->input('name'),
                        'number'=>$request->input('number'),
                        'category'=>$request->input('category'),
                        'brand'=>$request->input('brand'),
                        'model'=>$request->input('model'),
                        'quantity'=>$request->input('quantity'),
                        'unit'=>$request->input('unit'),
                        'ip'=>$request->input('ip'),
                        'supplier'=>$request->input('supplier'),
                        'marks'=>$request->input('marks',''),
                        'info'=>'null',
                ]);
                return '200';
                break;
            case '3':
                DB::table('depot')->where('number',$request->input('number'))->delete();
                return '200';
                break;
            default:
                return 'error';
                break;


        }




    }

    public  function order(Request $request){
        if(!Session::get('task_check'))
            return 'login_fail';

        switch ($request->input('oper')){
            case '1':

                break;

        }

       $array= $request->input('list');
        return '4' ;
    }
}
