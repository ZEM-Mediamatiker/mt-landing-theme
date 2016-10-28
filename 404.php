<?php get_header();?>

    <div class="container-fluid">

        <div id="content" class="col-sm-12">
            <div class="row">

                <div class="alert alert-info" role="alert">
                    <span class="sr-only">info:</span> 
                    404 - <?php $options = get_option('mt_theme_options'); echo $options['404_bar_title'];?>
                </div>
                
                <p>
                    <a href="<?php echo esc_url( home_url() ) ?>"><?php $options = get_option('mt_theme_options'); echo $options['404_back_home'];?></a>
                </p>
                

            </div>

        </div>
        
        <script>
            document.title = '<?php $options = get_option("mt_theme_options"); echo $options["404_tab_title"];?>';
        </script>

    </div>

    <?php get_footer();?>