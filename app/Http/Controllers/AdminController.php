<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;



class AdminController extends Controller
{
   public $mlist=array(0=>['主页','home'],1=>['物品库存','libary'],2=>['出库单','output'],3=>['入库单','input'],4=>['仓库管理','depot'],5=>['货位管理','place'],6=>['班级管理','class'],7=>['账号管理','user'],8=>['test','test'],9=>['test','test']);
                     public $tlist=array(1=>'海纳百川',2=>'厚德载物',3=>'有容乃大',4=>'仓库管理',5=>'货位管理',6=>'班级管理',7=>'账号管理',8=>'轮播',9=>'test');

    public function index(Request $request,$id)
    {   $user_row = DB::table('users')->where('username',Session::get('username'));
        $marks_array = json_decode($user_row->value('marks'),true);
        $return_array=['id'=>$id,'mlist'=>$this->mlist,'marks'=>$marks_array,'tlist'=>$this->tlist,'times'=>4];

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
        switch ($id){
            case '1':
                $return_array['search_input']=$request->get('search','');
                $libary_data=DB::table('depot');
                if ($request->has('search')){
                    $libary_data=$libary_data
                        ->join('place_b','depot.ip','=','place_b.id')
                        ->join('place_a','place_b.aid','=','place_a.id')
                        ->where('number','like','%'.$request->get('search').'%')
                        ->orWhere('name','like','%'.$request->get('search').'%')
                        ->orWhere('category','like','%'.$request->get('search').'%')
                        ->orWhere('place_a.place','like','%'.$request->get('search').'%')
                        ->orWhere('model','like','%'.$request->get('search').'%')
                        ->orWhere('marks','like','%'.$request->get('search').'%')
                    ;
                }
                $libary_data=$libary_data->orderBy('category','desc')->orderBy('number','asc')->paginate(10);
                $return_array['libary_data']=$libary_data;
                if ($libary_data->currentPage()>$libary_data->lastPage()||$libary_data->currentPage()<1)
                    if ($request->has('search'))
                        return redirect('/admin/1?search='.$request->get('search',''));
                    else
                        return redirect('/admin/1');
                break;
        }
        return view('admin.index',$return_array);
    }
    public function  loginout(){
        DB::table('users')->where('username',Session::get('username'))
            ->update(['last_token'=>'']);
        return redirect()->route('index.login');
    }
}
