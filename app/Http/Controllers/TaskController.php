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
//        $user_row=DB::table('users')->where('username',Session::get('username'));
//        //$user_row->update(['cart'=>json_encode($this->cart_moudel)]);
//        $array = json_decode($user_row
//        ->value('cart'),true);
        return DB::table('place_b')->join('place_a','place_a.id','=','place_b.aid')
            ->orderBy('place_a.place','asc')->orderBy('place_b.place','asc')
            ->select('place_a.place as place_a','place_b.place as place_b')
            ->get();
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

    public  function libary(Request $request){
        if(!Session::get('task_check'))
            return 'login_fail';

        $operation = $request->input('oper');
        switch ($operation){
            case '1':
                //修改
                $user_row=DB::table('depot')->where('number',$request->input('number'));
                if (DB::table('place_b')
                    ->join('place_a','place_a.id','=','place_b.aid')
                    ->where('place_b.id',$request->input('ip'))->exists())
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
                        'marks'=>$request->input('marks'),
                        'info'=>'null',
                ]);
                return '200';
                break;
            default:
                return 'error';
                break;


        }




    }
}
