<!DOCTYPE html>
<?php
    include_once 'multilanguage.php';
?>


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
        
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
        <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
        
    </head>
    <body>
        <div class="container container-main">
            <header>
                <div class="clearfix">
                    
                    <nav class="navbar treecrumb pull-left" role="navigation">
                        <h2 class="sr-only">Orientation in the website</h2>
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a id="admin-dropdown" href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="icon icon--right"></span>Bundesverwaltung</a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="admin-dropdown">
                                    <li class="dropdown-header">
                                        <a href="#">Der Bundesrat admin.ch</a>
                                    <ul>
                                        <li>
                                            <a href="#">BK: Schweizerische Bundeskanzlei</a>
                                        </li>
                                        <li>
                                            <a href="#">EDA: Eidgenössisches Departement für auswärtige Angelegenheiten</a>
                                        </li>
                                        <li>
                                            <a href="#">EDI: Eidgenössisches Department des Innern</a>
                                        </li>
                                        <li>
                                            <a href="#">EJPD: Eidgenössisches Justiz- und Polizeidepartment</a>
                                        </li>
                                        <li>
                                            <a href="#">VBS: Eidgenössisches Department für Verteidigung, Bevölkerungsschutz und Sport</a>
                                        </li>
                                        <li>
                                            <a href="#">EFD: Eidgenössisches Finanzdepartement</a>
                                        </li>
                                        <li>
                                            <a href="#">WBF: Eidgenössisches Departement für Wirtschaft, Bildung und Forschung</a>
                                        </li>
                                        <li>
                                            <a href="#">UVEK: Eidgenössisches Department für Umwelt, Verkehr, Energie und Kommunikation</a>
                                        </li>
                                    </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                  </nav>
                    
                    

                  <section class="nav-services clearfix">
                        <h2 class="sr-only">Language selection</h2>
                      
                        <?php
							wp_nav_menu(array(
                                "container" => "nav",
                                "container_class" => "nav-lang",
								"theme_location" => "lang-nav"
							));
						?>
                      
                      
                        <!--<nav class="nav-lang">
                              <ul>
                                <li>
                                    <a href="?lang=de" lang="de" title="Deutsch selected" aria-label="Deutsch selected" class="langde active">DE</a>
                                  </li>
                                  <li>
                                      <a href="?lang=fr" lang="fr" title="Français" aria-label="Français" class="langfr">FR</a>
                                  </li>                                
                              </ul>
                        </nav>-->


                        <nav class="nav-service" role="navigation">
                            <h2 class="sr-only">Services navigation</h2>
                            <ul>
                                <li>
                                    <a href="http://www.lba.admin.ch/internet/lba/de/home/themen/zem.html" target="_blank">Contact
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </section>
                </div>

                <div class="clearfix">
                    <a href="#" class="brand hidden-xs" title="back to home">
                        <img src="img/logo-CH.svg" onerror="this.onerror=null; this.src='img/logo-CH.png'" alt="back to home" />
                        <h1><?php echo $lang['EIDG_DEP_HEAD'];?></h1>
                    </a>
                </div>
            </header>