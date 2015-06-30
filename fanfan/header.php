<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <title>
        	<?php if ( is_home() ) {
			bloginfo('name');echo '-';bloginfo('description');
			} elseif ( is_category() ) {
			single_cat_title();echo '-';bloginfo('name');
			} elseif (is_single() || is_page() ) {
			single_post_title();
			} elseif (is_search() ) {
			echo "搜索结果";echo '-';bloginfo('name');
			} elseif (is_404() ) {
			echo '页面未找到!';
			} else {
			wp_title('',true);
			} ?>
		</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <!--页面主样式表-->
        
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" type="text/css" media="screen" />
        <!--[if IE ]> 
            <style type="text/css">
                header,.c1,.c2,.c3,.indexinfo>h2,.lh>h2{
                    opacity:1;  
                }  
            </style> 
        <![endif]-->
    </head>
    <?php flush(); ?>
    <body>
    	<header>
    		<nav class="topbar">
    			<div class="myinfo">
	    			<a href="<?php bloginfo('wpurl')?>"><img id="avt" src="<?php bloginfo('template_url')?>/images/avt.jpg"></a>
	    			<h3><?php bloginfo( 'description' ); ?></h3>
	    		</div>
    			<div class="contact">
    				<a href="http://weibo.com/3780726527/profile?rightmod=1&wvr=6&mod=personinfo" ><img src="<?php bloginfo('template_url')?>/images/sinaLOGO_32x32.png"></a>
    				<a href="http://space.bilibili.com/2181785" ><img src="<?php bloginfo('template_url')?>/images/bili.gif"></a>
    				<a href="mailto:1419188107@qq.com" ><img src="<?php bloginfo('template_url')?>/images/email90.png"></a>
    			</div>
    		</nav>
    	</header>

