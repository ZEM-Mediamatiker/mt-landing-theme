        <footer>
            <address>
                <span class="hidden-xs"><?php $options = get_option('mt_theme_options'); echo $options['foot_departement_title'];?></span>
                <nav class="pull-right">
                    <ul>
                        <li>
                            <a href="<?php $options = get_option('mt_theme_options'); echo $options['foot_right_url'];?>" target="_blank">
                                <?php $options = get_option('mt_theme_options'); echo $options['foot_right_btn'];?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php $options = get_option('mt_theme_options'); echo $options['foot_imprint_url'];?>" target="_blank">
                                <?php $options = get_option('mt_theme_options'); echo $options['foot_imprint_btn'];?>
                            </a>
                        </li>
                    </ul>
                </nav>
            </address>
        </footer> 
    <?php wp_footer(); ?>
    </body>
    

    <script src="<?php echo get_template_directory_uri(); ?>/js/vendors.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/polyfill.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.min.js"></script>
        
    <script>		
		if(window.location.search == "?lang=fr"){
			$(".langfr").addClass("active");
		}else{
			$(".langfr").removeClass("active");
		}
        if(window.location.search == "?lang=de"){
			$(".langde").addClass("active");
		}else{
			$(".langde").removeClass("active");
		}
        if(window.location.search == "?lang=it"){
			$(".langit").addClass("active");
		}else{
			$(".langit").removeClass("active");
		}
        if(window.location.search == "?lang=en"){
			$(".langen").addClass("active");
		}else{
			$(".langen").removeClass("active");
		}        
	</script>
    
</html>