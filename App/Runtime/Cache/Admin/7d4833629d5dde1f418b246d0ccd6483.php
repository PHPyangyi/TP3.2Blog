<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="/TP3.2Blog/Public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/TP3.2Blog/Public/css/main.css"/>
    <script type="text/javascript" src="/TP3.2Blog/Public/js/libs/modernizr.min.js"></script>
    <script type="text/javascript" src="/TP3.2Blog/Public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="/TP3.2Blog/Public/ueditor/ueditor.all.min.js"></script>
    <script type="text/javascript" src="/TP3.2Blog/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
</head>
<body>
﻿<link rel="stylesheet" type="text/css" href="/TP3.2Blog/Public/Admin/css/common.css"/>
<link rel="stylesheet" type="text/css" href="/TP3.2Blog/Public/Admin/css/main.css"/>
<script type="text/javascript" src="/TP3.2Blog/Public/Admin/js/libs/modernizr.min.js"></script>


<script type="text/javascript" src="/TP3.2Blog/Public/Admin/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/TP3.2Blog/Public/Admin/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" src="/TP3.2Blog/Public/Admin/ueditor/lang/zh-cn/zh-cn.js"></script>
<div class="container clearfix">
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
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">文章管理</a><span class="crumb-step">&gt;</span><span>修改文章</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo ($articles["id"]); ?>">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>文章名称：</th>
                                <td>
                                    <input class="common-text required" id="title" name="title" size="50" value="<?php echo ($articles["title"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>文章描述：</th>
                                <td>
                                    <textarea style="width:400px; height:100px;" name="desc"><?php echo ($articles["desc"]); ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th>缩略图：</th>
                                <td>
                                    <input id="pic" name="pic" size="50" value="" type="file">
                                    <?php if($articles['pic'] != ''): ?><img src="/TP3.2Blog<?php echo ($articles["pic"]); ?>" height="30">
                                    <?php else: ?>
                                    暂无缩略图<?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>所属栏目：</th>
                                <td>
                                    <select name="cateid">
                                        <option value="">请选择分类</option>
                                        <?php if(is_array($cateres)): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option <?php if($vo['id'] == $articles['cateid']): ?>selected="selected"<?php endif; ?> value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["catename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>内容：</th>
                                <td>
                                    <textarea  id="content" name="content"><?php echo ($articles["content"]); ?></textarea>
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
<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    UE.getEditor('content',{initialFrameWidth:1500,initialFrameHeight:400,});
    


</script>
</body>
</html>