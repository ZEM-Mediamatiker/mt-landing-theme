<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8">
        <title>mediathek.admin.ch</title>
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
          <!-- Standard Bootstrap `navbar` structure with the `treecrumb` class -->
          <nav class="navbar treecrumb pull-left" role="navigation">
            <h2 class="sr-only">Orientation in the website</h2>
            <ul class="nav navbar-nav">

              <!-- Treecrumb dropdown element -->
              <li class="dropdown">
                <!-- Dropdown label -->
                <a id="admin-dropdown" href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="icon icon--right"></span>Bundesverwaltung</a>
                <!-- Dropdown list element -->
                <ul class="dropdown-menu" role="menu" aria-labelledby="admin-dropdown">
                  <!-- Dropdown title, can ben place anywhere in the list -->
                  <li class="dropdown-header">
                    <a href="#">Der Bundesrat admin.ch</a>
                    <ul>
                      <li><a href="#">BK: Schweizerische Bundeskanzlei</a></li>
                      <li><a href="#">EDA: Eidgenössisches Departement für auswärtige Angelegenheiten</a></li>
                      <li><a href="#">EDI: Eidgenössisches Department des Innern</a></li>
                      <li><a href="#">EJPD: Eidgenössisches Justiz- und Polizeidepartment</a></li>
                      <li><a href="#">VBS: Eidgenössisches Department für Verteidigung, Bevölkerungsschutz und Sport</a></li>
                      <li><a href="#">EFD: Eidgenössisches Finanzdepartement</a></li>
                        <li><a href="#">WBF: Eidgenössisches Departement für Wirtschaft, Bildung und Forschung</a></li>
                      <li><a href="#">UVEK: Eidgenössisches Department für Umwelt, Verkehr, Energie und Kommunikation</a></li>
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
                <li><a href="#" lang="de" title="Deutsch selected" aria-label="Deutsch selected" class="active">DE</a></li>
                <li><a href="#" lang="fr" title="Français" aria-label="Français">FR</a></li>
                <li><a href="#" lang="it" title="Italiano" aria-label="Italiano">IT</a></li>
                <li><a href="#" lang="en" title="English" aria-label="English">EN</a></li>
              </ul>
            </nav>
              
              
            <nav class="nav-service" role="navigation">
              <h2 class="sr-only">Services navigation</h2>
              <ul>
                <li>
                    <a href="http://www.lba.admin.ch/internet/lba/de/home/themen/zem.html" target="_blank">
                        Contact
                    </a>
                  </li>
              </ul>
            </nav>
          </section>
        </div>

        <div class="clearfix">
          <a href="#" class="brand hidden-xs" title="back to home">
            <img src="img/logo-CH.svg" onerror="this.onerror=null; this.src='img/logo-CH.png'" alt="back to home" />
            <h1>Eidgenössisches Departement für Verteidigung, Bevölkerungsschutz und Sport </h1>
          </a>


          
        </div>

        

        </header>
            
        
            
        



<nav class="nav-main yamm navbar" id="main-navigation">
        <h2 class="sr-only">Navigation</h2>
        <section class="nav-mobile">
          <div class="table-row">
            <div class="nav-mobile-header">
              <div class="table-row">
                <span class="nav-mobile-logo">
                  <img src="img/swiss.svg" onerror="this.onerror=null; this.src='img/swiss.png'" alt="Confederatio Helvetica" />
                </span>
                <h1><a href="#">Mediathek</a></h1>
              </div>
            </div>
            
            
          </div>
        </section>

        <!-- The tab navigation -->
        <ul class="nav navbar-nav">
          <li class="dropdown yamm-fw">
            <a href="index.php" class="dropdown-toggle">Mediathek Frontend <span class="sr-only">current page</span></a>
          </li>
          <li class="dropdown current yamm-fw">
            <a href="backend.php" class="dropdown-toggle">Mediathek Backend</a>
            
          </li>
          
          
          
          
        </ul>
      </nav>



    
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        <div class="container-fluid">
        
            <h1 class="page-title centered">Mediathek Backend</h1>
            
        <div id="content" class="col-sm-12">
            <div class="row">
                
                <div class="col-md-6 col-sm-4 centered">
                  <div class="list-group">
                    <!--<div class="list-group-header">
                      <h2 class="pull-left">Videoportal</h2>
                    </div>-->

                    <div class="row">
                      <div class="col-sm-12">
                        <p>
                          <img src="img/digame.jpg" alt="Image description">
                        </p>
                        <h2><a href="#">DIGAME</a></h2>
                        <p>
                      Im Videoportal finden Sie Videos zu den Themen Verteidigung, Bevölkerungsschutz und Sport.
                          </p>
                        <a href="https://www.digame.mediathek.admin.ch/" target="_blank" type="button" class="btn btn-primary">DIGAME aufrufen</a>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-md-6 col-sm-4 centered">
                  <div class="list-group">
                    <!--<div class="list-group-header">
                      <h2 class="pull-left">Videoportal</h2>
                    </div>-->

                    <div class="row">
                      <div class="col-sm-12">
                        <p>
                          <img src="img/handbuch.jpg" alt="Image description">
                        </p>
                        <h2><a href="#">Handbuch</a></h2>
                        <p>
                      Im Fotoportal finden Sie Bilder zu den Themen Verteidigung, Bevölkerungsschutz und Sport.
                          </p>
                        <a href="http://digame.zem.ch" target="_blank" type="button" class="btn btn-primary">Handbuch öffnen</a>
                      </div>
                    </div>
                  </div>
                </div>
                
                
            
            </div> 
            
            
            
            
        </div>
            
            
            
        </div>
            
        
        <footer>

            <address>
            <span class="hidden-xs">Zentrum elektronische Medien ZEM</span>
            <nav class="pull-right">
              <ul>
                <li><a href="https://www.admin.ch/gov/de/start/rechtliches.html" target="_blank">Rechtliches</a></li><li><a href="https://www.admin.ch/gov/de/start/dokumentation/impressum.html" target="_blank">Impressum</a></li>
              </ul>
            </nav>
          </address>
        </footer>
            
    


            
            
    


        
    </body>
    
    <script type="text/javascript" src="js/vendors.min.js"></script>
    <script type="text/javascript" src="js/polyfills.min.js"></script>
    <script type="text/javascript" src="js/main.min.js"></script>
    
</html>
