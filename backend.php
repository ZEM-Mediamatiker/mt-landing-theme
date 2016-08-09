<?php
    include_once 'partitials/header.php';
?>
            
        
            
        



<nav class="nav-main yamm navbar" id="main-navigation">
        <h2 class="sr-only">Navigation</h2>
        <section class="nav-mobile">
		<div class="table-row">
			<div class="nav-mobile-header">
				<div class="table-row">
					<span class="nav-mobile-logo">
            <img src="img/swiss.svg" onerror="this.onerror=null; this.src='img/swiss.png'" alt="Confederatio Helvetica" />
          </span>
					<h1><a href="#"><?php echo $lang['MEDIATHEK'];?></a></h1>
				</div>
			</div>
			<div class="table-cell dropdown">
				<a href="#" class="nav-mobile-menu dropdown-toggle" data-toggle="dropdown"><span class="icon icon--menu"></span></a>
				<div class="mobilenavi drilldown dropdown-menu" role="menu">
					<div class="drilldown-container">
						<nav class="nav-page-list">
							<ul>
								<li><a href="index.php">Mediathek Frontend</a></li>
								<li><a href="backend.php">Mediathek Backend</a></li>
							</ul>
							
						</nav>
                        <a href="#" class="yamm-close-bottom"><span class="icon icon--top" aria-hidden="true"></span></a>
					</div>
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
                      In DIGAME können die Mediaassets verwaltet werden.
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
                      Das Handbuch bietet alle notwendigen Informationen zu DIGAME.
                          </p>
                        <a href="http://digame.zem.ch" target="_blank" type="button" class="btn btn-primary">Handbuch öffnen</a>
                      </div>
                    </div>
                  </div>
                </div>
                
                
            
            </div> 
            
            
            
            
        </div>
            
            
            
        </div>
            
        
        
<?php
    include_once 'partitials/footer.php';
?>