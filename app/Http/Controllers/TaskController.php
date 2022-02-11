<?php

namespace App\Http\Controllers;

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
        $user_row->update(['marks'=>json_encode($this->marks_moudel)]);
        $json = json_decode($user_row
            ->value('marks'),true);
        return $json;
    }


}
