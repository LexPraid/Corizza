<?php
function style_script(){
wp_enqueue_style('enqueue_style', get_template_directory_uri().'/style/style.css');
}


add_action('wp_enqueue_scripts','style_script');

/*добавляем картинки*/

add_theme_support('post-thumbnails'); 


/*Breadcrumb*/

function the_breadcrumb() {
	if (!is_home()) {
		echo '<li><a href="';
		echo get_option('home').'">';
		echo 'Главная';
		echo "</a> <span class='divider'>/</span></li> ";
		if (is_category() || is_single()) {
			echo "<li>";
			single_cat_title();
			echo "</li>";
			if (is_single()) {
			the_category(', ');
				echo " <span class='divider'>/</span><li> ";
				the_title();
				echo "</li>";
			}
		} elseif (is_page()) {
			echo "<li>";
			echo the_title();
			echo "</li>";
		}
		  elseif (is_tag()) {
			echo 'Записи с меткой "'; 
			single_tag_title();
			echo '"'; }
		elseif (is_day()) {echo "Архив за"; the_time('  jS F Y');}
		elseif (is_month()) {echo "Архив "; the_time(' F  Y');}
		elseif (is_year()) {echo "Архив за "; the_time(' Y');}
		elseif (is_author()) {echo "Архив автора";}
		elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "Архив блога";}
		elseif (is_search()) {echo "Результаты поиска";}
			elseif (is_404()) {	echo '404 - Страница не найдена';}
	}
}

/*тут будет меню*/
register_nav_menus( array( 
        'menu' =>__( 'меню' ), 
        'menu_footer' => 'Меню в футере', 
    ));
// Регистрируем сайдбары
if ( function_exists('register_sidebar') ) {
register_sidebar (array(
	
	'name'=>'Виджеты для сайдбара',
	'id' => 'sidebar_widg',
	'discription' => 'Область для виджей',
	'before_widget' =>'<div class="sb_center">',
	'after_widget' =>'</div>',
	));

}
	
	
/*register_sidebar (array(
	
	'name'=>'Виджеты для футера',
	'id' => 'footer_widg',
	'discription' => 'Область для виджей',
	));
*/


if ( function_exists( 'register_nav_menus' ) )
{
	register_nav_menus(
		array(
			'custom-menus'=>__('Custom menu'),
		)
	);
}
/*постраничка*/
function custom_menu(){
	echo '<ul>';
	wp_list_pages('title_li=&');
	echo '</ul>';
}
function wp_corenavi() {
  global $wp_query;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $a['total'] = $max;
  $a['current'] = $current;

  $total = 1; //1 - выводить текст "Страница N из N", 0 - не выводить
  $a['mid_size'] = 3; //сколько ссылок показывать слева и справа от текущей
  $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
  $a['prev_text'] = '«'; //текст ссылки "Предыдущая страница"
  $a['next_text'] = '»'; //текст ссылки "Следующая страница"

  if ($max > 1) echo '<div class="wp-pagenavi">';
  if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>'."\r\n";
  echo $pages . paginate_links($a);
  if ($max > 1) echo '</div>';
}



/*
if ( function_exists( 'register_nav_menus' ) )
{
	register_nav_menus(
		array(
			'custom-menu'=>__('menu_footer'),
		)
	);
}
*/
?>


	