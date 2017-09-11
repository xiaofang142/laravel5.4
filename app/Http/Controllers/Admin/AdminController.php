<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/11 0011
 * Time: 下午 2:46
 */

namespace App\Http\Controllers\Admin;


use App\Http\Models\Admin;
use Illuminate\Support\Facades\Request;

class AdminController extends BaseController
{
    /*
     * 展示全部的用户
     * */
    public function index(Request $request){
        $admins =Admin::all();
        return view('admin.admin.index',['admins'=>$admins]);
    }
    public function add(Request $request){

    }
    public function delete($id = null){

    }
    public function update($id = null){

    }

}