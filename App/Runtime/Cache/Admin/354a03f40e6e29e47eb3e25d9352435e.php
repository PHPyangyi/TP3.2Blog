<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    ﻿<link rel="stylesheet" type="text/css" href="/TP3.2Blog/Public/Admin/css/common.css"/>
<link rel="stylesheet" type="text/css" href="/TP3.2Blog/Public/Admin/css/main.css"/>
<script type="text/javascript" src="/TP3.2Blog/Public/Admin/js/libs/modernizr.min.js"></script>
</head>
<body>
﻿<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.html">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">管理员</a></li>
                <li><a href="#">修改密码</a></li>
                <li><a href="#">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="/TP3.2Blog/index.php/Admin/Article/lst"><i class="icon-font">&#xe005;</i>文章管理</a></li>
                        <li><a href="/TP3.2Blog/index.php/Admin/Cate/lst"><i class="icon-font">&#xe006;</i>分类管理</a></li>
                        <li><a href="/TP3.2Blog/index.php/Admin/Link/lst"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                        <li><a href="/TP3.2Blog/index.php/Admin/Admin/lst"><i class="icon-font">&#xe008;</i>管理员管理</a></li>
                    </ul>
                </li>
                
            </ul>
        </div>
    </div>

    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">链接管理</a><span class="crumb-step">&gt;</span><span>修改链接</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="" method="post" id="myform" name="myform">
                    <input type="hidden" name="id" value="<?php echo ($links["id"]); ?>">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th><i class="require-red">*</i>链接名称：</th>
                            <td>
                                <input class="common-text required" id="title" name="title" size="50" value="<?php echo ($links["title"]); ?>" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>链接地址：</th>
                            <td>
                                <input class="common-text required" id="url" name="url" size="50" value="<?php echo ($links["url"]); ?>" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>链接描述：</th>
                            <td>
                                <textarea style="width:400px; height:100px;" name="desc"><?php echo ($links["desc"]); ?></textarea>
                            </td>
                        </tr>

                        <tr>
                            <th></th>
                            <td>
                                <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                            </td>
                        </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>