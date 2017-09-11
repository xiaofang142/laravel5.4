<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/11 0011
 * Time: 下午 3:27
 */

namespace App\Http\Controllers\Admin;


class IndexController extends BaseController
{
    /*
     * 用于加载布局视图  没有其他实际含义
     * */
    public function index(){
        return view('admin.lyout.index');
    }
    public function top(){
        return view('admin.lyout.top');
    }
    public function menu(){
        return view('admin.lyout.menu');
    }
    public function bar(){
        return view('admin.lyout.bar');
    }
    public function main(){
        return view('admin.lyout.main');
    }


}