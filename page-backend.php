<?php
/*
Template Name: Backend-Page
*/
?>

<?php get_header();?>   

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
				<div class="drilldown dropdown-menu" role="menu">
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
                
                <?php if ( have_posts() ) : ?>
                        <?php query_posts('cat=901'); ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<div <?php post_class('col-md-6 col-sm-4 centered'); ?>>
								<div class="entry-headimg"><?php the_post_thumbnail( 'entry-headimg' ); ?></div>
								<div class="category-entry-content">
									
									<h2><?php the_title(); ?></h2>

									<div class="entry">
										<?php the_content(''); ?> 
									</div>
								</div>
							</div>
							
							
							
						<?php endwhile; 

						else: ?>
							<p>Sorry, no posts matched your criteria.</p>
						<?php endif; ?>
                
                
            
            </div> 
            
            
            
            
        </div>
            
            
            
        </div>
            
        

<?php get_footer();?> 