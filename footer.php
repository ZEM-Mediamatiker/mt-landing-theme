 <footer>


      <div class="container-fluid">
        <h3><?php $options = get_option('mt_theme_options'); echo $options['nl-wdgt-title'];?></h3>
          
          
	<fieldset>
		<div class="form-group">
			<label for="inputText" class="col-sm-5 control-label">
                <?php $options = get_option('mt_theme_options'); echo $options['nl-wdgt-text'];?> 
            </label>
            
                
           <div class="newsletter-form">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Newsletter') )?>				
				</div>
            

			<!--<div class="btn-group col-sm-7">
				<input type="email" class="btn form-control" id="inputText" placeholder="Ihre E-Mail-Adresse...">
			
            
				<button type="button" class="btn btn-primary">Anmelden...</button>
			</div>-->
            
		</div>
	</fieldset>
        
        </div>

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
                            <a href="<?php $options = get_option('mt_theme_options'); echo $options['foot_imprint_url'];?>">
                                <?php $options = get_option('mt_theme_options'); echo $options['foot_imprint_btn'];?>
                            </a>
                        </li>
                    </ul>
                </nav>
            </address>

    </footer>

    <?php wp_footer(); ?>

    <script src="<?php echo get_template_directory_uri(); ?>/js/vendors.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/polyfill.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.min.js"></script>

 <!-- Piwik -->
 <script type="text/javascript">
     var _paq = _paq || [];
     _paq.push(["setDomains", ["*.landing.zem.ch"]]);
     _paq.push(['trackPageView']);
     _paq.push(['enableLinkTracking']);
     (function() {
         var u="//stats.zem.ch/";
         _paq.push(['setTrackerUrl', u+'piwik.php']);
         _paq.push(['setSiteId', '14']);
         var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
         g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
     })();
 </script>
 <noscript><p><img src="//stats.zem.ch/piwik.php?idsite=14" style="border:0;" alt="" /></p></noscript>
 <!-- End Piwik Code -->

    </body>
</html>