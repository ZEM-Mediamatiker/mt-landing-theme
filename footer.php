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


    </body>
</html>
