<?php get_header(); ?>

		<?php
		// 开始循环
		while ( have_posts() ) : the_post();

			// 页面模板.
			get_template_part( 'content', 'page' );?>

		
				<br/>
				<?php the_content();?>
		

		<?php	//评论模板
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		// 结束循环
		endwhile;
		?>

			



<?php get_footer(); ?>
