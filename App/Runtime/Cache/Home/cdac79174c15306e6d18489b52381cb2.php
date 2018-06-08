<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="applicable-device" content="pc">
<meta http-equiv="Cache-Control" content="no-transform" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="viewport" content="width=device-width" />

	<link rel="stylesheet" type="text/css" media="screen" href="/TP3.2Blog/Public/Home/style/style.css"  />

    <script src="/TP3.2Blog/Public/Home/style/jquery.min.js"></script>





		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>


<!-- 跳出 -->
<script type="text/javascript">/*frame*/ if (top.location != self.location) { top.location=self.location } </script>

</head>
<body class="home blog">

<div class="topbar" >
	<div class="inner">
		<ul class="nav">
			<li style="font-size: 20px;color: #fff; width: 50px;height: 40px; line-height: 40px; text-align: center"><a style="display: block; width: 45px;"
					href="http://localhost/TP3.2Blog/index.php/Index/index">首页</a></li>
			<?php if(is_array($cateres)): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li
				<?php if($current == $vo['id']): ?>class='current-menu-item'<?php endif; ?> ><a href="/TP3.2Blog/index.php/Home/Cate/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["catename"]); ?></a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
</div>

<div class="wrapper">
	<div class="content">


	
	<!-- 分享代码 --><div class="baidufenxiang" style="overflow:auto;margin-bottom:10px"><!-- Baidu Button BEGIN -->
<div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare">
<a class="bds_bdhome"></a>
<a class="bds_renren"></a>
<a class="bds_kaixin001"></a>
<a class="bds_douban"></a>
<a class="bds_youdao"></a>
<a class="bds_sqq"></a>
<a class="bds_hi"></a>
<a class="bds_baidu"></a>
<a class="bds_qq"></a>
<a class="bds_tqq"></a>
<a class="bds_tsina"></a>
<a class="bds_qzone"></a>
<a class="bds_mshare"></a>
<span class="bds_more"></span>
<a class="shareCount"></a>
</div>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=53164" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script>
<!-- Baidu Button END --></div><!-- 分享代码 -->
	
<ul class="excerpt thumb">
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
			<a href="/TP3.2Blog/index.php/Home/Article/index/id/<?php echo ($vo["id"]); ?>" class="pic"><img src="/TP3.2Blog<?php echo ($vo["pic"]); ?>" alt="<?php echo ($vo["title"]); ?>" /></a>			<h2 class="excerpt-tit">
				<a href="/TP3.2Blog/index.php/Home/Article/index/id/<?php echo ($vo["id"]); ?>" ><?php echo ($vo["title"]); ?></a>
			</h2>
			<p class="excerpt-desc"><?php echo ($vo["desc"]); ?>...</p>
			<div class="excerpt-time"><?php echo (date("m-d",$vo["time"])); ?></div>
		</li><?php endforeach; endif; else: echo "" ;endif; ?>	
	</ul>

<div class="paging"><?php echo ($page); ?></div>

</div>
<div class="sidebar">

	<div class="widget widget_categories"><h3 class="widget-tit">文章分类</h3>		
	<ul>
	<?php if(is_array($cateres)): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="cat-item cat-item-18"><a href="/TP3.2Blog/index.php/Home/Cate/index/id/<?php echo ($vo["id"]); ?>" ><?php echo ($vo["catename"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
<div class="widget widget_recent_entries">		<h3 class="widget-tit">最新发表</h3>		<ul>
				<?php if(is_array($artres)): $i = 0; $__LIST__ = $artres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
				<a href="/TP3.2Blog/index.php/Home/Article/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>	
				</ul>
		</div>		<div class="widget widget_links"><h3 class="widget-tit">友情链接</h3>
	<ul class='xoxo blogroll'>
	<?php if(is_array($linkres)): $i = 0; $__LIST__ = $linkres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["url"]); ?>" rel="friend" target="_blank"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

	</ul>
</div>
</div>
</div>

<div class="footer">
	<div class="inner">
		<div class="manage">
			<a target="_blank" href="http://yispace.net/copyright">站内导航</a>  | <script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F99c2c06a529fc4c8787deb597141fe76' type='text/javascript'%3E%3C/script%3E"));
</script>		</div>		
		<div class="copyright">
			<a href="http://yispace.net">YANG博客阅读网</a>，版权所有！ &copy; 2017 <img src="http://www.weiweiqi.com/wp-content/themes/weiweiqi/img/beian.png" /> <a rel="nofollow" target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=43010202000139">桂·公网安备43010202000139号</a> <a rel="nofollow" target="_blank" href="http://www.miitbeian.gov.cn">桂ICP备13010121号-3</a>
		</div>
	</div>
</div>

<script type='text/javascript' src='http://yispace.net/wp-includes/js/wp-embed.min.js?ver=4.5.2'></script>

<!-- 百度自动推送 -->
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
</body>
</html>

<!-- Dynamic page generated in 0.992 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2016-08-23 19:32:28 -->

<!-- super cache -->