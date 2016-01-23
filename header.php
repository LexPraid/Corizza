<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>
<?php if ( is_home() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php bloginfo('description'); ?><?php } ?>
<?php if ( is_search() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Результаты&nbsp; поиска<?php } ?>
<?php if ( is_author() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Архив автора<?php } ?>
<?php if ( is_single() ) { ?><?php wp_title(''); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>
<?php if ( is_page() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php wp_title(''); ?><?php } ?>
<?php if ( is_category() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Архив&nbsp;| &nbsp;<?php single_cat_title(); ?><?php } ?>
<?php if ( is_month() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Архив&nbsp; <?php the_time('F'); ?><?php } ?>
<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Метки&nbsp;|&nbsp;<?php  single_tag_title("", true); } } ?>
</title>
<meta name="keywords" content="cpices" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta charset="utf-8" content="text/html"/>
<meta name="description" content="cpices, paprica"/>
<link href="http://allfont.ru/allfont.css?fonts=ds-arabic" rel="stylesheet" type="text/css" />

<?php wp_head(); ?>

<?php if( is_front_page() ) {?>
<link rel="stylesheet" type="text/css" media="all" href="http://localhost:8080/wordpress/wp-content/themes/Corizza/style/style_index.css" />
<?php } ?>
<link rel="stylesheet" type="text/css" media="all" href="http://localhost:8080/wordpress/wp-content/themes/Corizza/style.css" />
<!-- сделать через блог инфо-->
</head>
<body>

<div id="wrapper">
	<div id="header">
    	<div id="site_title"><div class="laibla">aprica</div></div>
    </div> 
	<!-- end of header -->
     		 	  		
		<div class="navbar">
	        <div class="navbar-inner">
		        <?php
					wp_nav_menu(array('theme_location'=>'menu',
									'container_id'=>'top_menu',
									'menu_id' => 'nav',
									'menu_class' => 'nav'));
				?>
	        </div>
        </div>

   