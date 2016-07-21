<?php
    include_once 'multilanguage.php';
?>

<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title><?php echo $lang['MEDIATHEK'];?> | mediathek.admin.ch</title>
        <link rel="stylesheet" href="css/admin.css">
        <link rel="stylesheet" href="css/print.css">
        <link rel="stylesheet" href="css/vendors.css">
        <link rel="stylesheet" href="css/style.css">
        
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
                                <a id="admin-dropdown" href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="icon icon--right"></span><?php echo $lang['EIDG_BV'];?></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="admin-dropdown">
                                    <li class="dropdown-header">
                                        <a href="#"><?php echo $lang['EIDG_BR'];?></a>
                                    <ul>
                                        <li>
                                            <a href="#"><?php echo $lang['EIDG_BK'];?></a>
                                        </li>
                                        <li>
                                            <a href="#"><?php echo $lang['EIDG_EDA'];?></a>
                                        </li>
                                        <li>
                                            <a href="#"><?php echo $lang['EIDG_EDI'];?></a>
                                        </li>
                                        <li>
                                            <a href="#"><?php echo $lang['EIDG_EJPD'];?></a>
                                        </li>
                                        <li>
                                            <a href="#"><?php echo $lang['EIDG_VBS'];?></a>
                                        </li>
                                        <li>
                                            <a href="#"><?php echo $lang['EIDG_EFD'];?></a>
                                        </li>
                                        <li>
                                            <a href="#"><?php echo $lang['EIDG_WBF'];?></a>
                                        </li>
                                        <li>
                                            <a href="#"><?php echo $lang['EIDG_UVEK'];?></a>
                                        </li>
                                    </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                  </nav>

                  <section class="nav-services clearfix">
                        <h2 class="sr-only">Language selection</h2>
                        <nav class="nav-lang">
                              <ul>
                                <li>
                                    <a href="?lang=de" lang="de" title="Deutsch selected" aria-label="Deutsch selected" class="langde active">DE</a>
                                  </li>
                                  <li>
                                      <a href="?lang=fr" lang="fr" title="Français" aria-label="Français" class="langfr">FR</a>
                                  </li>
                                <!--<li><a href="?lang=it" lang="it" title="Italiano" aria-label="Italiano" class="langit">IT</a></li>
                                <li><a href="?lang=en" lang="en" title="English" aria-label="English" class=langen>EN</a></li>-->
                              </ul>
                        </nav>


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