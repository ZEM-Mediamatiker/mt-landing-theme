<!DOCTYPE html>
<?php wp_head(); ?>
<html>
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>
            <?php if(is_home() || is_front_page()) {
				echo "Home | "; bloginfo('name'); ?>
				<?php } else { ?>
				<?php wp_title('','true','right'); ?> | <?php bloginfo('name'); ?>
			<?php } ?>
        </title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/print.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/admin.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/vendors.css" type="text/css" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon" />
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon" />
        
    </head>
    <body>
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

                        <!--<nav class="nav-service" role="navigation">
                            <ul>
                                <li>
                                    <a href="http://www.lba.admin.ch/internet/lba/de/home/themen/zem.html" target="_blank">Contact
                                    </a>
                                </li>
                            </ul>
                        </nav>-->
                      
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
                    <a href="#" class="brand hidden-xs" title="back to home">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo-CH.svg" data-fallback="<?php echo get_template_directory_uri(); ?>/img/logo-ch.png" alt="Swiss">
                        
                        <h1>
                            <?php $options = get_option('mt_theme_options'); echo $options['head_departement_title'];?>
                        </h1>
                    </a>
                    
                    <form class="form-horizontal form-search pull-right" role="form">
                        <label for="search-field" class="sr-only">Search:</label>
                        <input id="search-field" class="form-control search-field" type="text" placeholder="Search">
                    </form>
                    
                </div>
            </header>
            
            <?php get_template_part( 'partitials/tab', 'nav' ); ?>