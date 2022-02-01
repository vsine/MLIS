<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;



class AdminController extends Controller
{
   public $mlist=array(0=>['主页','home'],1=>['物品库存','libary'],2=>['出库单','output'],3=>['入库单','input'],4=>['仓库管理'],5=>['货位管理'],6=>['班级管理'],7=>['账号管理'],8=>['test'],9=>['test']);
   public $tlist=array(1=>'海纳百川',2=>'厚德载物',3=>'有容乃大',4=>'仓库管理',5=>'货位管理',6=>'班级管理',7=>'账号管理',8=>'轮播',9=>'test');

    public function index(Request $request,$id)
    {

        $user_row = DB::table('users')->where('username',Session::get('username'));
        $marks_array = json_decode($user_row->value('marks'),true);

        //判断是否包含访问该页的权限，无权限则访问主页
        $is_contain = false;
        if ($id!='0'){
            foreach ($marks_array['list'] as $key=>$value)
                if ((in_array($id,$value)))
                    $is_contain=true;
            if (!($is_contain))
                return redirect()->route('admin.index');
        }
        //end

        return view('admin.index',['id'=>$id,'mlist'=>$this->mlist,'marks'=>$marks_array,'tlist'=>$this->tlist]);

    }
    public function  loginout(){
        DB::table('users')->where('username',Session::get('username'))
            ->update(['last_token'=>'']);
        return redirect()->route('index.login');
    }
}
