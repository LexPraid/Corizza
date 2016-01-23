<?php get_header(); ?>
<div class="main">
	
	<div class="content">
		<h2 class="page-title"><?php printf( __( 'Результат поиска: %s'), get_search_query() ); ?>
		</h2>
		<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); 
		?>
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
				<!--post navigation-->
				<?php else: ?>
				<!--no post found-->
				<div class="alert alert-error">Поиск не дал результатов &nbsp;&#9888;</div>
				<?php endif ?>
					
					
	</div>
		
		<?php get_sidebar(); ?>
		
</div> 
<?php get_footer(); ?>

</body>
</html>