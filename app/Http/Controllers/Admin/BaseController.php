<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/11 0011
 * Time: 下午 2:43
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    /*
     *
     * 在构造函数里面实现  权限检测
     *
     * */
    public function __construct(){
    }

}