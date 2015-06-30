<?php get_header();?>


		<?php
		// 开始循环
		while ( have_posts() ) : the_post();

			// 页面模板.
			get_template_part( 'content', 'page' );?>

			<div class="posts posts2">
        		<h2><?php the_title(); ?></h2>
        		<div class="ifo">
        			<span><?php the_date('y年m月d日'); ?></span>
        			<?php the_category(',')?>
        		</div>
			
				<?php the_content();?>
				<div id="tbu">
				<?php previous_post_link('%link','上一篇', $in_same_cat = true, $excluded_categories = ''); ?>
				<?php next_post_link('%link','下一篇', $in_same_cat = true, $excluded_categories = ''); ?>
				</div>
		</div>

		<?php
		// 结束循环
		endwhile;
		?>

			

<script type="text/javascript">
var prev=document.querySelector("#tbu").querySelector("a");
	prev.style.float="left";
	

</script>



<?php get_footer();?>