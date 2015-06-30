
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
    </head>
    <?php flush(); ?>
    <body style="background-color:#ccccff">
    	<div class="categIn">
    		<div class="myinfo2">
	    			<a href="<?php bloginfo('wpurl')?>"><img id="avt" src="<?php bloginfo('template_url')?>/images/avt.jpg"></a>
	    			<h3><?php bloginfo( 'description' ); ?></h3>
	    		</div>
			<ul>
				<li><a href="<?php echo get_category_link(get_cat_ID( 'code' )); ?>">code</a></li>
				<li><a href="<?php echo get_category_link(get_cat_ID( 'life' )); ?>">life</a></li>
				<li><a href="<?php echo get_category_link(get_cat_ID( 'hobbies')); ?>">hobbies</a></li>
			</ul>
			
			<div class="contact contact2">
    				<a href="http://weibo.com/3780726527/profile?rightmod=1&wvr=6&mod=personinfo" ><img src="<?php bloginfo('template_url')?>/images/sinaLOGO_32x32.png"></a>
    				<a href="http://space.bilibili.com/2181785" ><img src="<?php bloginfo('template_url')?>/images/bili.gif"></a>
    				<a href="mailto:1419188107@qq.com" ><img src="<?php bloginfo('template_url')?>/images/email90.png"></a>
    		</div>
    	</div>

    	<?php 
				//获取当前页面url并截取分类名
				//global $wp;
			    // $current_url = home_url(add_query_arg(array(),$wp->request));	
				//$pattern = "/code|life|hobbies/"; 

				//preg_match_all($pattern,$current_url, $matches); 
				// $cate =  $matches[0][0] ;//cate为当前分类名
				//query_posts( 'cat='.get_cat_ID($cate) );//字符串拼接
				
				//获取当前分类文章
		
    			//query_posts( 'cat='.get_cat_ID($cate) );//字符串拼接

    			//因为页面有WP_Query()的主循环所以不需要用到上面的代码
    			//用query_posts()查询文章记得循环完成后	用 wp_reset_query() 重置主循环，以免出现问题。
				if( have_posts() ):while (have_posts()) : the_post();

			?>
			<div class="posts">
        		<h2><?php the_title(); ?></h2>
        		<div class="ifo">
        			<span><?php the_date('y年m月d日'); ?></span>
        			<?php the_category(',')?>
        		</div>
        		<p><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 108,"[...]"); ?></p>
        		<a href="<?php the_permalink() ?>" rel="bookmark">查看全文</a>

        	</div><br/><br/>
    		<?php endwhile;
    		
				  endif;
				 
			?>
    </body>
</html>