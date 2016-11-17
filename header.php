<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/print.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/admin.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/vendors.css" type="text/css" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <?php wp_head(); ?>
    </head>
    
    <body <?php body_class(); ?>>
        <div class="container container-main">
            <header>
                <div class="clearfix">                    
                    <?php get_template_part( 'partitials/breadcrumb', 'nav' ); ?>
                    
                    <section class="nav-services clearfix">
                        <h2 class="sr-only">Language selection</h2>                      
                        <?php
							wp_nav_menu(array(
                                "container" => "nav",
                                "container_class" => "nav-lang",
								"theme_location" => "lang-nav"
							));
						?>                      
                        <?php
							wp_nav_menu(array(
                                "container" => "nav",
                                "container_class" => "nav-service",
								"theme_location" => "service-nav"
							));
						?>
                    </section>
                </div>

                <div class="clearfix">
                    <a href="<?php echo esc_url( home_url() ) ?>" class="brand hidden-xs" title="back to home">
                        <img src="<?php header_image(); ?>" data-fallback="<?php echo get_template_directory_uri(); ?>/img/logo-ch.png" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Swiss">
                        
                        <h1>
                            <?php $options = get_option('mt_theme_options'); echo $options['head_departement_title'];?>
                        </h1>
                    </a>

                    <?php get_search_form(); ?>
                    
                </div>
            </header>
            
<?php get_template_part( 'partitials/tab', 'nav' ); ?>