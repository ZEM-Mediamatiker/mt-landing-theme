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
                <h1><a href="#">Mediathek</a></h1>
              </div>
            </div>
            
            
          </div>
        </section>

        <!-- The tab navigation -->
        <ul class="nav navbar-nav">
          <li class="dropdown current yamm-fw">
            <a href="index.php" class="dropdown-toggle">Mediathek Frontend <span class="sr-only">current page</span></a>
          </li>
          <li class="dropdown yamm-fw">
            <a href="backend.php" class="dropdown-toggle">Mediathek Backend</a>
            
          </li>
          
          
          
          
        </ul>
      </nav>



    
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        <div class="container-fluid">
        
            <h1 class="page-title centered"><?php echo $lang['MED_WELCOME'];?></h1>
            
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
                          <img src="img/videoportal.jpg" alt="Image description">
                        </p>
                        <h2><a href="#"><?php echo $lang['MED_VIDEO'];?></a></h2>
                        <p>
                            <?php echo $lang['MED_VIDEO_DESC'];?>
                          </p>
                        <a href="https://vp.zem.ch/startseite/" target="_blank" type="button" class="btn btn-primary"><?php echo $lang['MED_VIDEO_BTN'];?></a>
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
                          <img src="img/fotoportal.jpg" alt="Image description">
                        </p>
                        <h2><a href="#"><?php echo $lang['MED_FOTO'];?></a></h2>
                        <p>
                            <?php echo $lang['MED_FOTO_DESC'];?>
                          </p>
                        <a href="https://www.mediathek.admin.ch" target="_blank" type="button" class="btn btn-primary"><?php echo $lang['MED_FOTO_BTN'];?></a>
                      </div>
                    </div>
                  </div>
                </div>
                
                
            
            </div> 
            
            
            
            <div class="row">
                
                <a href="https://www.youtube.com/user/schweizerarmee" target="_blank">
                <div class="col-md-4 centered">
                  <div class="external list-group">
                    <!--<div class="list-group-header">
                      <h2 class="pull-left">Videoportal</h2>
                    </div>-->

                    <div class="external-services row">
                      <div class="col-sm-12">
                        <p class="icon"></p>
                        <p>
                            <?php echo $lang['MED_YOUTUBE'];?>
                        </p>
                        <!--<a href="https://vp.zem.ch/startseite/" type="button" class="btn btn-primary">YouTube</a>-->
                      </div>          
                        
                    </div>
                  </div>
                </div>
                </a>
                
                <a href="https://itunes.apple.com/ch/podcast/info-schweizer-armee/id448622473" target="_blank">
                <div class="col-md-4 centered">
                  <div class="external list-group">
                    <!--<div class="list-group-header">
                      <h2 class="pull-left">Videoportal</h2>
                    </div>-->

                    <div class="external-services row">
                      <div class="col-sm-12">
                        <p class="icon"></p>
                        <p>
                            <?php echo $lang['MED_ITUNES'];?>
                        </p>
                        <!--<a href="https://itunes.apple.com/ch/podcast/info-schweizer-armee/id448622473" type="button" class="btn btn-primary">iTunes</a>-->
                      </div>          
                        
                    </div>
                  </div>
                </div>
                </a>
                
                <a href="http://www.mediathek.admin.ch/Assets/MilitaerPostkarten" target="_blank">
                <div class="col-md-4 centered">
                  <div class="external list-group">
                    <!--<div class="list-group-header">
                      <h2 class="pull-left">Videoportal</h2>
                    </div>-->

                    <div class="external-services row">
                      <div class="col-sm-12">
                        <p class="icon"></p>
                        <p>
                            <?php echo $lang['MED_CARDS'];?>
                        </p>
                        <!--<a href="https://itunes.apple.com/ch/podcast/info-schweizer-armee/id448622473" type="button" class="btn btn-primary">Postkarten</a>-->
                      </div>          
                        
                    </div>
                  </div>
                </div>
                </a>
                
                
                
            
            </div>
        </div>
            
            
            
        </div>
            
        

<?php
    include_once 'partitials/footer.php';
?>