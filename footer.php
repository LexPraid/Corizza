<footer>
    <?php wp_footer();?>
	
	
		
		
		
		<?php if(!dynamic_sidebar('sidebar_foot_block')): ?>
			
		<div class="footer_widg">	
			
			<div class="sb_center">
				<h2>Для партнеров</h2>
			</div>
		</div>	
		<?php endif; ?>	
		<div class="navbar_footer">
	        <div class="navbar-inner">
		        <?php
					if ( function_exists( 'wp_nav_menu' ) )
			        wp_nav_menu( 
				        array( 
				        'theme_location' => 'menu_footer',
				        'fallback_cb'=> 'custom_menu',
				        'container' => 'ul',
				        'menu_id' => 'nav',
				        'menu_class' => 'nav') 
					);
			    else custom_menu();
				?>
	        </div>
        </div>
		<div class="footer_data">
			<h3>27.12.2015 &nbsp Kharkiv &reg;</h3> 
		</div>
		

		
</footer>
</body>
</html>