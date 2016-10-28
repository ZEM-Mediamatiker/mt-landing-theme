<?php get_header();?>   




    
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        <div class="container-fluid">
                    
        <div id="content" class="col-sm-12">
            <div class="row">
                
                <h2>Suchresultate</h2>
                
                <?php if (have_posts()): ?>
                    <p class="search-result">
                        Suchresultate für "<?php echo $_GET['s']; ?>"
                    </p>
                
                
                
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#contentPages" data-toggle="tab">Content pages (28)</a></li>
                </ul>
                
                
                <!-- Tab panes -->
                <div class="tab-content tab-border">
                    <div class="tab-pane active" id="contentPages">

                    <!-- Results -->        
                    <?php if ( have_posts() ) : ?>

                        <?php while ( have_posts() ) : the_post(); ?>

                        <article class="search-result">
                            <h4>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h4>
                            <p>
                                <?php the_content(''); ?>
                            </p>
                        </article>

                        <?php endwhile; 

                        else: ?>
                            <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>


                    </div>
                </div>

                <?php else: ?>

                <p class="no-post">
                    Keine Beiträge gefunden für "<?php echo $_GET['s']; ?>"
                </p>

                <?php endif; ?>
                
                
	
	
</div>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
            
            </div> 
            
            
            
            
        </div>


        <script>
            document.title = '<?php $options = get_option("mt_theme_options"); echo $options["search_tab_title"];?>';
        </script>
            
            
            
            
        

<?php get_footer();?> 