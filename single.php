<?php get_header(); ?>
<div class="main">
	<div class="slider">
	</div>
	<nav class="bradcrumb">
			<?php the_breadcrumb(); ?>
	</nav>
	<div class="content">
	<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
	<!--posts-->
		<div class="content_block">
			<div class="content_top">
			
			<a href="#"><?php the_post_thumbnail('full'); ?>
			</a>
			<!-- как лучше задать размеры картинки?-->
			
			</div>
			<div class="content_text">
				
				<h2><?php the_title(); ?>&nbsp;<span class="time">(<?php the_time("j.m.y");?>)</span></h2>
				
				<?php the_content(); ?>
			</div>	
		</div>

				<!-- Коменты -->
				
		<div class="coments">
		
			
			<?php comments_template(); ?>
			
			
		</div>
		
				<!-- Метки -->
		<div class="marks">
			<?php
				$posttags = get_the_tags();
				if ($posttags) {
					foreach($posttags as $tag) {
					$tag_links[] = '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
					}
					 echo join( ', ', $tag_links );
				}
			?>
		
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

</body>
</html>