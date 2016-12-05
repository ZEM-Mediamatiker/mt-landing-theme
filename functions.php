<?php
/*
Die Post-Thumbnails ermöglichen es, einem Beitrag oder einer Seite ein Titelbild hinzuzufügen. (https://codex.wordpress.org/Post_Thumbnails)
*/
add_theme_support( 'post-thumbnails' );

/*
über diese Funktion wird dem User im Backend ermöglicht, ein eigenes Hintergrundbild oder -farbe festzulegen. Mit den Parametern kann ein Standard in Form einer Farbe oder eines Bildes gesetzt werden. (https://codex.wordpress.org/Custom_Backgrounds)
*/
$bgargs = array(
	'default-color' => 'ffffff',
	//'default-image' => '%1$s/img/bg-striped.png',
);

add_theme_support( 'custom-background', $bgargs );

/*
Mit dieser Eigenschaft wird die Möglichkeit zum Hinzugeüfgen eines eigenen Headerbildes zum Theme aus dem Wordpress-Backend ermöglicht. Mit dem Argument headerargs werden zusätzliche Einstellungen wie beispielsweise ein Standard-Bild festgelegt. (https://codex.wordpress.org/Custom_Headers)
*/
$headerargs = array(
	'width'         => 252,
    'flex-height'    => true,
	'default-image' => get_template_directory_uri() . '/img/logo-CH.svg',
);

add_theme_support( 'custom-header', $headerargs );

/*
Die folgende Funktion erlaubt es dem Benutzer, selber einen Titel festzulegen, der im Fenstertitel angezeigt wird. (https://codex.wordpress.org/Title_Tag).
*/
add_theme_support( 'title-tag' );

/*
Hier werden die verschiedenen Menus registriert, so dass diese im Backend erscheinen und Einträge hinzugefügt werden können.
*/
register_nav_menus(array(
    "service-nav" => "Service Navigation",
    "lang-nav" => "Language Navigation",
    "dep-nav" => "Departements Navigation",
    "tab-nav" => "Tab-Naviagation"
));


/*
Mit dieser Funktion werden der Navigation zusätzliche Klassen hinzugefügt, die vom admin.css verwendet werden um die Hauptnavigation zu stylen. So müssen nicht die ganzen Eigenschaften auf die von Wordpress standardmässig verwendeten umgeschrieben werden.
*/
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

/*
Hier wird ein benutzerdefinierter Editor-Style hinzugefügt. Weitere Informationen sind in der Wordpress-Reference zu finden. (https://developer.wordpress.org/reference/functions/add_editor_style/)
*/
function wpdocs_theme_add_editor_styles() {
    add_editor_style( 'css/custom-editor-style.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );

/*
Hier wird die Sektion für die Newsletter-Eintragung im Footer der Webseite registriert. So kann das Widget im Backend vom Theme dieser Sektion zugewiesen werden.
*/
 register_sidebar(array('name'=>'Newsletter',
 'description'   => 'Newsletter',
 ));

/*
Die folgende Funktion verhindert, dass das eigene Stylesheet des Newsletter Plugins für Formulare geladen und in den Headbereich eingefügt wird. Es ist das Gegenstück zur wp_enqueue_style()- Funktion in der subscription.php des Plugins, wo die Stylesheet Datei eingelesen wird.
*/

add_action( 'wp_print_styles', 'deregister_my_styles', 100 );
 
function deregister_my_styles() {
	wp_deregister_style( 'newsletter-subscription' );
}

/* 
Die folgende Funktion ist für das Einfügen der Theme-Options zuständig. Im Vorfeld wird eine Helper-function ausgeführt, dass die Optionen nicht einen Error ausgeben, wenn das Options-Framework Plugin deaktiviert würde. Im folgenden die Beschreibung aus der Wordpress-Reference:

Helper function to return the theme option value. If no value has been saved, it returns $default. Needed because options are saved as serialized strings. This code allows the theme to work without errors if the Options Framework plugin has been disabled.
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

/*
Die folgende Funktion ist für die Darstellung von Breadcrumbs zuständig.
*/
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
