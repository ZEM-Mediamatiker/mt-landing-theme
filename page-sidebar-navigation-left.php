<?php
/*
Template Name: Sidebar navigation left
*/
?>

<?php get_header();?>   

<div class="container-fluid">
      <div class="row">
                  <div class="col-sm-4 col-md-3 drilldown">
            <a href="#collapseSubNav" data-toggle="collapse" class="collapsed visible-xs"><?php $options = get_option('mt_theme_options'); echo $options['nav_sub_nav'];?></a>
            <div class="drilldown-container">
              <nav class="nav-page-list" role="navigation" id="secondary-navigation">
                
                <a href="<?php echo esc_url( home_url() ) ?>" class="icon icon--before icon--less"><span class="sr-only">Back to </span><?php $options = get_option('mt_theme_options'); echo $options['start_page'];?></a>
                <ul>
                  <!-- the .list-emphasis class is optionnal -->
                  <li class="list-emphasis">
                    <span></span>
                    <ul>
                      <li class="active"><a href="<?php echo esc_url( get_permalink());?>"><?php the_title(); ?></a>
                        
                      </li>
                      
                    </ul>
                  </li>
                </ul>
              </nav>

            </div>
          </div>
                <div class="col-sm-8 col-md-9" id="content">
          <div class="row">
                <div class="col-sm-12">

                    
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
						<h1><?php the_title(); ?></h1> 					
      					<?php the_content(); ?>      					
      					      					
      					      					
      								
					<?php endwhile; endif; ?>
					
					<?php wp_link_pages();?> 

      
    </div>
  </div>
          </div>
    </div>
</div>
            
        

<?php get_footer();?> 