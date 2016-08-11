<?php
/*
Template Name: Backend-Page
*/
?>

<?php get_header();?>   

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