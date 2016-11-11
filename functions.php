<?php

add_theme_support( 'post-thumbnails' ); 

$bgargs = array(
	'default-color' => 'ffffff',
	//'default-image' => '%1$s/img/bg-striped.png',
);

add_theme_support( 'custom-background', $bgargs );


$headerargs = array(
	'width'         => 252,
    'flex-height'    => true,
	'default-image' => get_template_directory_uri() . '/img/logo-CH.svg',
);

add_theme_support( 'custom-header', $headerargs );

add_theme_support( 'title-tag' );

register_nav_menus(array(
    "service-nav" => "Service Navigation",
    "lang-nav" => "Language Navigation",
    "dep-nav" => "Departements Navigation",
    "tab-nav" => "Tab-Naviagation"
));


function add_classes_on_li($classes, $item, $args) {
  $classes[] = 'dropdown yamm-fw tab-active';
  return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'current ';
    }
    return $classes;
}


function wpdocs_theme_add_editor_styles() {
    add_editor_style( 'cass/custom-editor-style.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );


 register_sidebar(array('name'=>'Newsletter',
 'description'   => 'Newsletter',
 ));


/* 
 * Helper function to return the theme option value. If no value has been saved, it returns $default.
 * Needed because options are saved as serialized strings.
 *
 * This code allows the theme to work without errors if the Options Framework plugin has been disabled.
*/

if ( !function_exists( 'of_get_option' ) ) {
function of_get_option($name, $default = false) {
	
	$optionsframework_settings = get_option('optionsframework');
	
	// Gets the unique option id
	$option_name = $optionsframework_settings['id'];
	
	if ( get_option($option_name) ) {
		$options = get_option($option_name);
	}
		
	if ( isset($options[$name]) ) {
		return $options[$name];
	} else {
		return $default;
	}
}
}

require_once ( get_stylesheet_directory() . '/theme-options.php' );




// breadcrumb
function nav_breadcrumb() {
 
 $delimiter = '&raquo;';
 $home = get_option('mt_theme_options');
 $before = '<li class="active" aria-selected="true" aria-label="current page">'; 
 $after = '</li>'; 
 
 if ( !is_home() && !is_front_page() || is_paged() ) {
 
 echo '<ol class="breadcrumb" role="navigation" aria-labelledby="br1">';
 
 global $post;
 $homeLink = get_bloginfo('url');
 echo '<li><a href="' . $homeLink . '">' . $home['start_page'] . '</a></li> ' . '<span class="icon icon--greater"></span>' . ' ';
 
 if ( is_category()) {
 global $wp_query;
 $cat_obj = $wp_query->get_queried_object();
 $thisCat = $cat_obj->term_id;
 $thisCat = get_category($thisCat);
 $parentCat = get_category($thisCat->parent);
 if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
 echo $before . single_cat_title('', false) . $after;
 
 } elseif ( is_day() ) {
 echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
 echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
 echo $before . get_the_time('d') . $after;
 
 } elseif ( is_month() ) {
 echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
 echo $before . get_the_time('F') . $after;
 
 } elseif ( is_year() ) {
 echo $before . get_the_time('Y') . $after;
 
 } elseif ( is_single() && !is_attachment() ) {
 if ( get_post_type() != 'post' ) {
 $post_type = get_post_type_object(get_post_type());
 $slug = $post_type->rewrite;
 echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
 echo $before . get_the_title() . $after;
 } else {
 $cat = get_the_category(); $cat = $cat[0];
 echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
 echo $before . get_the_title() . $after;
 }
 
 } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
 $post_type = get_post_type_object(get_post_type());
 echo $before . $post_type->labels->singular_name . $after;
 

 } elseif ( is_attachment() ) {
 $parent = get_post($post->post_parent);
 $cat = get_the_category($parent->ID); $cat = $cat[0];
 echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
 echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
 echo $before . get_the_title() . $after;
 
 } elseif ( is_page() && !$post->post_parent ) {
 echo $before . get_the_title() . $after;
 
 } elseif ( is_page() && $post->post_parent ) {
 $parent_id = $post->post_parent;
 $breadcrumbs = array();
 while ($parent_id) {
 $page = get_page($parent_id);
 $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
 $parent_id = $page->post_parent;
 }
 $breadcrumbs = array_reverse($breadcrumbs);
 foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
 echo $before . get_the_title() . $after;
 
 } elseif ( is_search() ) {
 echo $before . 'Ergebnisse für Ihre Suche nach "' . get_search_query() . '"' . $after;
 
 } elseif ( is_tag() ) {
 echo $before . 'Beiträge mit dem Schlagwort "' . single_tag_title('', false) . '"' . $after;

 } elseif ( is_tag() ) {
 echo $before . 'Beiträge mit dem Schlagwort "' . single_tag_title('', false) . '"' . $after;

 } elseif ( is_404() ) {
 echo $before . 'Fehler 404' . $after;
 }
 
 if ( get_query_var('paged') ) {
 if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
 echo ': ' . __('Seite') . ' ' . get_query_var('paged');
 if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
 }
 
 echo '</ol>';
 
 } 
} 




?>
