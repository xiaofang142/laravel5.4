<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/11 0011
 * Time: 下午 4:09
 */
?>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>左侧导航</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="{{asset('css/adminStyle.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/public.js')}}"></script>
</head>
<body style="background:#313131">
<div class="menu-list">
    <a href="main.html" target="mainCont" class="block menu-list-title center" style="border:none;margin-bottom:8px;color:#fff;">起始页</a>
    <ul>
        <li class="menu-list-title">
            <span>订单管理</span>
            <i>◢</i>
        </li>
        <li>
            <ul class="menu-children">
                <li><a href="order_list.html" title="商品列表" target="mainCont">订单列表</a></li>
            </ul>
        </li>

        <li class="menu-list-title">
            <span>商品管理</span>
            <i>◢</i>
        </li>
        <li>
            <ul class="menu-children">
                <li><a href="product_list.html" title="商品列表" target="mainCont">商品列表</a></li>
                <li><a href="product_category.html" title="商品分类" target="mainCont">商品分类</a></li>
                <li><a href="recycle_bin.html" title="商品分类" target="mainCont">商品回收站</a></li>
            </ul>
        </li>

        <li class="menu-list-title">
            <span>会员管理</span>
            <i>◢</i>
        </li>
        <li>
            <ul class="menu-children">
                <li><a href="user_list.html" title="会员列表" target="mainCont">会员列表</a></li>
                <li><a href="add_user.html" title="添加会员" target="mainCont">添加会员</a></li>
                <li><a href="user_rank.html" title="会员等级" target="mainCont">会员等级</a></li>
                <li><a href="user_message.html" title="会员留言" target="mainCont">会员留言</a></li>
            </ul>
        </li>

        <li class="menu-list-title">
            <span>系统设置</span>
            <i>◢</i>
        </li>
        <li>
            <ul class="menu-children">
                <li><a href="basic_settings.html" title="站点基本设置" target="mainCont">站点基本设置</a></li>
                <li><a href="admin_list.html" title="站点基本设置" target="mainCont">站点管理员</a></li>
            </ul>
        </li>

        <li class="menu-list-title">
            <span>广告管理</span>
            <i>◢</i>
        </li>
        <li>
            <ul class="menu-children">
                <li><a href="advertising_list.html" title="站点基本设置" target="mainCont">广告列表</a></li>
            </ul>
        </li>
        <li class="menu-list-title">
            <span>用户管理</span>
            <i>◢</i>
        </li>
        <li>
            <ul class="menu-children">
                <li><a href="{{url('admin/admin')}}" title="站点基本设置" target="mainCont">用户列表</a></li>
            </ul>
        </li>
        <li class="menu-list-title">
            <span>角色管理</span>
            <i>◢</i>
        </li>
        <li>
            <ul class="menu-children">
                <li><a href="advertising_list.html" title="站点基本设置" target="mainCont">角色列表</a></li>
            </ul>
        </li>
        <li class="menu-list-title">
            <span>权限管理</span>
            <i>◢</i>
        </li>
        <li>
            <ul class="menu-children">
                <li><a href="advertising_list.html" title="站点基本设置" target="mainCont">权限列表</a></li>
            </ul>
        </li>


    </ul>
</div>
</body>
</html>
