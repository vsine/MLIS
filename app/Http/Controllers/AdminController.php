<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;



class AdminController extends Controller
{
   public $mlist=array(0=>['主页','home'],1=>['物品库存','home'],2=>['出库单'],3=>['入库单'],4=>['仓库管理'],5=>['货位管理'],6=>['班级管理'],7=>['账号管理'],8=>['test'],9=>['test']);
   public $tlist=array(1=>'海纳百川',2=>'厚德载物',3=>'有容乃大',4=>'仓库管理',5=>'货位管理',6=>'班级管理',7=>'账号管理',8=>'轮播',9=>'test');

    public function index(Request $request,$id)
    {
        return view('admin.index',['id'=>$id,'mlist'=>$this->mlist]);
    }
    public function  loginout(){
        DB::table('users')->where('username',Session::get('username'))
            ->update(['last_token'=>'']);
        return redirect()->route('index.login');
    }
}
