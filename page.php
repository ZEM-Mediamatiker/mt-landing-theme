<?php get_header();?>   

        <div class="container-fluid">
                    
        <div id="content" class="col-sm-12">
            <div class="row">
                
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
						<h1><?php the_title(); ?></h1> 					
      					<?php the_content(); ?>      					

					<?php endwhile; endif; ?>
					
					<?php wp_link_pages();?>           

            </div> 

        </div>

        </div>

<?php get_footer();?> 