<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;
	wp_title( '|', true, 'right' );
	// Add the blog name.
	bloginfo( 'name' );
	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )echo " , $site_description";
	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
	?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/static/css/style.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/static/css/main.css" />
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/static/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/static/js/common.js"></script>
<link REL="SHORTCUT ICON" HREF="<?php bloginfo( 'template_url' ); ?>/static/image/test@2x.icon">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="alternate" type="application/rss+xml" title="魅族博客 &raquo; Feed" href="<?php echo esc_url( home_url( '/' ) ); ?>feed" />
<link rel="alternate" type="application/rss+xml" title="魅族博客 &raquo; 评论 Feed" href="<?php echo esc_url( home_url( '/' ) ); ?>comments/feed" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo esc_url( home_url( '/' ) ); ?>xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo esc_url( home_url( '/' ) ); ?>wp-includes/wlwmanifest.xml" /> 
<?php wp_head(); ?>
</head>
<body>
	<div id="header">
		<div id="navigat" class="contain">
			<a class="mzlogo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><div id="logo"></div></a>
			<div id="prdLogs">
			<a id="rss" href="<?php bloginfo('rss2_url'); ?>" title="RSS订阅本站" target="_blank"></a>
			<a id="weibo" title="关注新浪微博" href="http://weibo.com/salmonchcom" target="_blank"></a>
			<a id="weixin" href="javascript:;" title="关注微信"></a>
			<a id="youku" title="关注三闻鱼视频" target="_blank" href="http://i.youku.com/salmonfish"></a>
			</div>
			<div id="searchBox" class="searchBg"><form action="<?php echo esc_url( home_url( '/' ) ); ?>" id="searchform" method="get"><input id="s" name="s" type="text" class="input opaci" autocomplete="off" onBlur="searchEvent(0)" onFocus="searchEvent(1)" value="搜索" /><input type="submit" value="search" id="searchsubmit" name="submit" class="submit"></form></div>
		</div>
	</div>
	
	<div id="inv_bg" class="bg" style="display: none;"></div>
	
	<div id="weichat" style="display: none;">
	    <div class="wrap_guide">
			<div class="content">
			    <h2>想在手机上找到我们？</h2>
				<p>请用微信扫描左侧的二维码，或者在微信添加朋友<em style="font-family:arial;font-size:16px;">“ salmonch ”</em></p>
				<p>我们会在那里，继续为你提供电子产品评测、科技公司观察，潮流消费思考。</p>
				<br>
				<p>三闻鱼<em style="font-family:arial;font-size:14px;">SalmonCH</em>，简单、有趣、有价值。</p>
			    <div>
			        <a href="javascript:;" onclick="closeWeichat()">关闭</a>
			    </div>
		    </div>
		</div>
	</div>
	<script>
		//关闭关注微信
		var closeWeichat = function() {
		$('#inv_bg').fadeOut('fast');
		$('#weichat').fadeOut('fast');
		} 
	</script>
	<script>
		 //关注微信
		$('#weixin').bind('click', function() {
		$('#inv_bg').fadeIn('fast');
		$('#weichat').fadeIn('fast');
		}) 
	</script>