<?php get_header(); ?>
<div class="main">
	<div class="slider">
	</div>
	
	<div class="content">
	<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
	<!--posts-->
		<div class="content_block">
			<div class="content_top">
			<?php the_post_thumbnail('full'); ?>
			<!-- как лучше задать размеры картинки?-->
			
			
			</div>
			<div class="content_text">
				
				<h2><?php the_title(); ?><span class="time">(<?php the_time("j.m.y");?>)</span></h2>
				
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>">(читать далее...)</a>
			</div>	
		</div>
	<?php endwhile ?>
	<!--post navigation-->
	<?php else: ?>
	<!--no post found-->
	<?php endif ?>
		
		
		<!--
		<div class="content_block">
			<div class="content_top">
			<img src="<?php bloginfo('template_directory'); ?>/images/pic3.jpg" height="105px";
			width="200px"/>
			</div>
				<a href="#"><span class="content_text">Перец крвссный</span></a>
		</div>
		
		-->
	</div>
	
	<?php get_sidebar(); ?>
		
</div> 
<?php get_footer(); ?>

</body>
</html>