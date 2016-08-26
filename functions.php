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

?>
