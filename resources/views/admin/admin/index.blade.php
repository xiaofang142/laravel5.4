<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/11 0011
 * Time: 下午 5:23
 */
?>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>会员列表</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="{{asset('css/adminStyle.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/public.js')}}"></script>
</head>
<body>
<div class="wrap">
    <div class="page-title">
        <span class="modular fl"><i class="user"></i><em>用户列表</em></span>
        <span class="modular fr"><a href="add_user.html" class="pt-link-btn">+添加新用户</a></span>
    </div>
    <table class="list-style Interlaced">
        <tr>
            <th>编号</th>
            <th>名字</th>
            <th>角色</th>
            <th>状态</th>
            <th>操作</th>
        </tr>

        @foreach($admins as $admin)
        <tr>
            <td>
                <input type="checkbox" value="{{$admin->id}}"/>
                <span class="middle">{{$admin->id}}</span>
            </td>
            <td class="center">{{$admin->name}}</td>
            <td class="center">{{$admin->role_id}}</td>
            <td class="center">
                @if($admin->status ==1)
                    已禁用
                @else正常
                    @endif

            </td>
            <td class="center">
                <a href="{{url('admin/admin/update')}}/id/{{$admin->id}}" class="inline-block" title="编辑"><img src="{{asset('images/icon_edit.gif')}}"/></a>
                <a href="{{url('admin/admin/delete')}}/id/{{$admin->id}}" class="inline-block" title="删除"><img src="{{asset('images/icon_drop.gif')}}"/></a>
            </td>
        </tr>
        @endforeach

    </table>
    <!-- BatchOperation -->
    <div style="overflow:hidden;">
        <!-- Operation -->
        <div class="BatchOperation fl">
            <input type="checkbox" id="del"/>
            <label for="del" class="btnStyle middle">全选</label>
            <input type="button" value="批量删除" class="btnStyle"/>
        </div>
        <!-- turn page -->
        <div class="turnPage center fr">
            <a>第一页</a>
            <a>1</a>
            <a>最后一页</a>
        </div>
    </div>
</div>
</body>
</html>
