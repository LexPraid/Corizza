<?php 
/**
 * Template Name: Category 15 Page
 *
 * @package WordPress
 * @since corizza
 */
?>
<?php get_header(); ?>
<div class="main">
	<div class="slider">
	</div>
	
	<div class="content">

		<?php 	$page = (get_query_var('paged')) ? get_query_var('paged') : 1;

query_posts('cat=15&paged='.$page); ?>
		<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
		<!--posts-->
			<div class="content_block">
						<div class="content_top">
							<?php the_post_thumbnail('full'); ?>
							<!-- как лучше задать размеры картинки?-->
							
							
						</div>
						<div class="content_text">
							
							<h2><?php the_title(); ?><span class="time">(<?php the_time("j.m.y");?>)<br><span>Коментов:&nbsp;<?php comments_popup_link('nema','1','%'); ?></span></span></h2>
							
							<?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>">(читать далее...)</a>
						</div>	
			</div>
				<?php endwhile ?>
				<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
				<!--post navigation-->
				<?php else: ?>
				<!--no post found-->
				<?php endif ?>
					
					
	</div>
		
		<?php get_sidebar(); ?>
		
</div> 
<?php get_footer(); ?>

</body>
</html>