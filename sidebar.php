<aside id="sidebar" class="side-bar">
	<?php	$categories =  get_categories(); ?>
		
		<div class="sb_center">
		<?php  //echo '<pre>'; print_r($categories ); echo '<pre>'; ?>
			<h2>Категории</h2>
			<ul>
			<?php foreach($categories  as $category ) { ?>
				<li><a href='<?php	echo home_url()."/?cat=".$category->term_id; ?>'>
				<?php echo $category->name; ?></a></li>
			<?php } ?>
			</ul>
		</div>	
		<?php if(!dynamic_sidebar('sidebar_widg')): ?>
			
		<?php endif; ?>	
		
	
		
	
</aside>