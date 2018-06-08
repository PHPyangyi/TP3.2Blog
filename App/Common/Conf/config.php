<?php
return array(
	//'配置项'=>'配置值'
    //设置可访问目录
    'MODULE_ALLOW_LIST'=>array('Home','Admin'),
    //设置默认目录
    'DEFAULT_MODULE'=>'Home',
    //设置模版后缀
    //'TMPL_TEMPLATE_SUFFIX'=>'.tpl',
    //设置默认主题目录
    'DEFAULT_THEME'=>'Default',
    //数据库配置
    //mysql
//    'DB_TYPE'=>'mysql',
//    'DB_HOST'=>'localhost',
//    'DB_USER'=>'root',
//    'DB_PWD'=>'12345678',
//    'DB_NAME'=>'weibo',
//    'DB_PORT'=>3306,
//    'DB_PREFIX'=>'weibo_',
    //pdo   thinkphp 3.23 的DB_type=>'' 不能写 pdo  他这个重写了 写 mysql即可
    'DB_TYPE'=>'mysql',
    'DB_USER'=>'root',
    'DB_PWD'=>'root',
    'DB_PREFIX'=>'blog_',
    'DB_DSN'=>'mysql:host=localhost;dbname=tp3blog;charset=UTF8',
);