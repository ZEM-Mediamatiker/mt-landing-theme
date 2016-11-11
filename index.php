<?php get_header();?>   

<div class="container-fluid">
        
            <h1 class="page-title centered">
                <?php $options = get_option('mt_theme_options'); echo $options['content_welcome_head'];?>
            </h1>
            
        <div id="content" class="col-sm-12">
            <div class="row">
                
                <?php if ( have_posts() ) : ?>
                        <?php query_posts('cat=900'); ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<div <?php post_class('col-md-6 col-sm-4 centered'); ?>>
								<div class="entry-headimg">
                                    
                                    <?php $name = get_post_meta($post->ID, 'ExternalUrl', true);
                                        if( $name ) { ?>
                                            <a href="<?php echo $name; ?>"><?php the_post_thumbnail(); ?></a>
                                        <?php } else {
                                            the_post_thumbnail();
                                        } ?>
                                    
                                </div>
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

            <div class="external-links row">
                
                <a href="<?php $options = get_option('mt_theme_options'); echo $options['offer_youtube_url'];?>" target="_blank">
                <div class="col-md-4 centered">
                  <div class="external list-group">

                    <div class="external-services row">
                      <div class="col-sm-12">
                        <p class="icon"></p>
                        <p>
                                <?php $options = get_option('mt_theme_options'); echo $options['offer_youtube_btn'];?>
                            
                        </p>
                        
                      </div>          
                        
                    </div>
                  </div>
                </div>
                </a>
                
                <a href="<?php $options = get_option('mt_theme_options'); echo $options['offer_itunes_url'];?>" target="_blank">
                <div class="col-md-4 centered">
                  <div class="external list-group">

                    <div class="external-services row">
                      <div class="col-sm-12">
                        <p class="icon"></p>
                        <p>
                            <?php $options = get_option('mt_theme_options'); echo $options['offer_itunes_btn'];?>
                        </p>
                        
                      </div>          
                        
                    </div>
                  </div>
                </div>
                </a>
                
                <a href="<?php $options = get_option('mt_theme_options'); echo $options['offer_cards_url'];?>" target="_blank">
                <div class="col-md-4 centered">
                  <div class="external list-group">

                    <div class="external-services row">
                      <div class="col-sm-12">
                        <p class="icon"></p>
                        <p>
                            <?php $options = get_option('mt_theme_options'); echo $options['offer_cards_btn'];?>
                        </p>
                        
                      </div>          
                        
                    </div>
                  </div>
                </div>
                </a>
            </div>
        </div>
        </div>

<?php get_footer();?> 