<nav class="nav-main yamm navbar" id="main-navigation">
        <section class="nav-mobile">
		<div class="table-row">
			<div class="nav-mobile-header">
				<div class="table-row">
					<span class="nav-mobile-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/swiss.svg" onerror="this.onerror=null; this.src='img/swiss.png'" alt="Confederatio Helvetica" />
          </span>
					<h1><a href="#"></a></h1>
				</div>
			</div>
            
			<div class="table-cell dropdown">
				<a href="#" class="nav-mobile-menu dropdown-toggle" data-toggle="dropdown"><span class="icon icon--menu"></span></a>
				<div class="drilldown dropdown-menu" role="menu">
					<div class="drilldown-container">
                        <?php
                            wp_nav_menu(array(
                                "container" => "nav",
                                "container_class" => "nav-page-list",
                                "theme_location" => "tab-nav"
                            ));
                        ?>
						
                        <a href="#" class="yamm-close-bottom"><span class="icon icon--top" aria-hidden="true"></span></a>
					</div>
				</div>
			</div>
            
            
			
		</div>
	</section>
    
    <?php
    wp_nav_menu(array(
        "container" => "nav",
        "menu_class" => "nav navbar-nav",
        'items_wrap' =>'<ul class="nav navbar-nav">%3$s</ul>',
        "theme_location" => "tab-nav"
    ));
?>

</nav>

