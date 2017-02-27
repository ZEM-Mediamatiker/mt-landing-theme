 <footer>
      <div class="container-fluid">
          <h3>
              <?php $options = get_option('mt_theme_options'); echo $options['nl-wdgt-title'];?>
          </h3>
          
          <fieldset>
              <div class="form-group">
                  <label for="inputText" class="col-sm-5 control-label">
                      <?php $options = get_option('mt_theme_options'); echo $options['nl-wdgt-text'];?>
                  </label>
                  
                  <div class="newsletter-form">
                      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Newsletter') )?>
                  </div>
              </div>
          </fieldset>
     </div>
     
     <address>
         <span class="hidden-xs">
             <?php $options = get_option('mt_theme_options'); echo $options['foot_departement_title'];?>
         </span>
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

 <!-- Google Analytics -->
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90418745-1', 'auto');
  ga('send', 'pageview');

</script>
 <!-- End Google Analytics Code -->

    </body>
</html>