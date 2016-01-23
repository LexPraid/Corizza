<?php get_header(); ?>
<div class="main">
	<div class="slider">
	</div>
	
	<div class="content">
		<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
		
		
		<!-- тут пытался сменить фон в отдельной записи
		<?php if (is_post(107)) 
		{echo "style='background-image:url(../images/papr.jpg))'";}?>-->
		
		
			<div class="content_block">
						<div class="content_top">
							<?php the_post_thumbnail('full'); ?>
							<!-- как лучше задать размеры картинки?-->
							
							
						</div>
						<div class="content_text">
							
							<h2><?php the_title(); ?>&nbsp;<span class="time">&nbsp; (<?php the_time("j.m.y");?>)<?php comments_popup_link('nema','1','%'); ?></span></h2>
							
							
						</div>	
			</div>
				<?php endwhile ?>
				<!--post navigation-->
				<?php else: ?>
				<!--no post found-->
				<?php endif ?>
					
					
	</div>
	
	
		
		<?php get_sidebar(); ?>
		
</div> 
<?php get_footer(); ?>

