<?php // Function to generate options page
function mytheme_home_page() {
global $pagenow;
if ( $pagenow == 'themes.php' && $_GET['page'] == 'theme-optionen' ) :
if ( isset ( $_GET['tab'] ) ) :
$tab = $_GET['tab'];
else:
$tab = 'general';
endif;
mytheme_admin_tabs ($tab); // this is where to call the function which makes the tabs and also pass $tab as the current tab...
switch ( $tab ) :
case 'general' :
mytheme_general_options();
break;
case 'layout' :
mytheme_layout_options();
break;
case 'advanced' :
mytheme_advanced_options();
break;
endswitch;
endif;
}

/* ------------------ */
/* theme options page */
/* ------------------ */
add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

// Einstellungen registrieren (http://codex.wordpress.org/Function_Reference/register_setting)
function theme_options_init(){
	register_setting( 'mt_options', 'mt_theme_options', 'mt_validate_options' );
}

// Seite in der Dashboard-Navigation erstellen
function theme_options_add_page() {
	add_theme_page('Optionen und Texte', 'Optionen und Texte', 'edit_theme_options', 'theme-optionen', 'mt_theme_options_page' ); // Seitentitel, Titel in der Navi, Berechtigung zum Editieren (http://codex.wordpress.org/Roles_and_Capabilities) , Slug, Funktion 
}

// Optionen-Seite erstellen
function mt_theme_options_page() {
global $select_options, $radio_options;
if ( ! isset( $_REQUEST['settings-updated'] ) )
	$_REQUEST['settings-updated'] = false; ?>

<div class="wrap"> 

<h2 class="themesettings">Theme-Optionen für <?php bloginfo('name'); ?></h2> 

<?php if ( false !== $_REQUEST['settings-updated'] ) : ?> 
<div class="updated fade">
	<p><strong>Die Änderungen wurden gespeichert.</strong></p>
</div>
<?php endif; ?>				
		<style>
			.themesettings{
				font-family: 'open_sanslight', Frutiger, 'Helvetica Neue', sans-serif;
				margin: 20px 0px !important;
			}
			#themeoptions{
				background: #fff;
				padding: 20px;
				width: 85%;
				box-sizing: border-box;
				font-family: 'open_sanslight', Frutiger, 'Helvetica Neue', sans-serif;
			}
			.settings-tab a{
				color: #23282D;
				padding:15px 20px;
				background:#fff;
				text-decoration:none!important;
				box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.1);
				font-size:13px;
				line-height: 1.5;
			}
			.settings-tab a:hover{
				background: #f4f4f4;
			}
			.active{
				border-bottom: 1px solid red;
			}
            
            input.regular-text{
                padding: 10px;
            }
			
			.descr{
				font-size: 10px;
				font-family: 'Open Sans', Frutiger, 'Helvetica Neue', sans-serif;
			}
			
			.form-table td{
				vertical-align: top;
			}
			
			.notice-success, div.updated{
				width: 85%;
				box-sizing: border-box;
			}
			
			.updated .fade .below-h2{
				margin: 20px 0px;
			}
			@font-face {
    			font-family: 'open_sanslight';
    			src: url('<?php echo get_template_directory_uri(); ?>/fonts/opensans-light-webfont.eot');
    			src: url('<?php echo get_template_directory_uri(); ?>/fonts/opensans-light-webfont.eot?#iefix') format('embedded-opentype'),
         		url('<?php echo get_template_directory_uri(); ?>/fonts/opensans-light-webfont.woff2') format('woff2'),
         		url('<?php echo get_template_directory_uri(); ?>/fonts/opensans-light-webfont.woff') format('woff'),
         		url('<?php echo get_template_directory_uri(); ?>/fonts/opensans-light-webfont.ttf') format('truetype'),
         		url('<?php echo get_template_directory_uri(); ?>/fonts/opensans-light-webfont.svg#open_sanslight') format('svg');
    			font-weight: normal;
    			font-style: normal;
			}					
		</style> 
				
    	<ul class="tabs" style="position:relative;margin-top:25px;" style="clear:both">
			<li class="settings-tab" style="float:left;"><a href='#allgemein'>Allgemeine Texte</a></li>
			<li class="settings-tab" style="float:left;"><a href='#departmenu'>Departement-Menu</a></li>
			<li class="settings-tab" style="float:left;"><a href='#404'>404-Seite</a></li>
			<li style="clear:both;"></li>
		</ul>

  <form id="themeoptions" method="post" action="options.php">
	<?php settings_fields( 'mt_options' ); ?>
    <?php $options = get_option( 'mt_theme_options' ); ?>    
    
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script>
			// Wait until the DOM has loaded before querying the document
			$(document).ready(function(){
				$('ul.tabs').each(function(){
					// For each set of tabs, we want to keep track of
					// which tab is active and it's associated content
					var $active, $content, $links = $(this).find('a');

					// If the location.hash matches one of the links, use that as the active tab.
					// If no match is found, use the first link as the initial active tab.
					$active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
					$active.addClass('active');

					$content = $($active[0].hash);

					// Hide the remaining content
					$links.not($active).each(function () {
						$(this.hash).hide();
					});

					// Bind the click event handler
					$(this).on('click', 'a', function(e){
						// Make the old tab inactive.
						$active.removeClass('active');
						$content.hide();

						// Update the variables with the new link and content
						$active = $(this);
						$content = $(this.hash);

						// Make the tab active.
						$active.addClass('active');
						$content.show();

						// Prevent the anchor's default click action
						e.preventDefault();
					});
				});
			});
		</script>	
		
		<div id="allgemein">
			
			<table class="form-table" style="width:75%">
                
                <tr valign="top">
					<th>Header</th>
      			</tr>

      			<tr valign="top">
        			<td>Departementsbezeichnung</td>
        			<td><input id="mt_theme_options[head_departement_title]" class="regular-text" type="text" name="mt_theme_options[head_departement_title]" value="<?php esc_attr_e( $options['head_departement_title'] ); ?>" /></td>
      			</tr>
                
                <tr valign="top">
					<th>Introtext</th>
      			</tr>
                
                <tr valign="top">
        			<td>Willkommenstext</td>
        			<td><input id="mt_theme_options[content_welcome_head]" class="regular-text" type="text" name="mt_theme_options[content_welcome_head]" value="<?php esc_attr_e( $options['content_welcome_head'] ); ?>" /></td>
      			</tr>
                
                <tr valign="top">
					<th>Externe Angebote</th>
      			</tr>
                
                <tr valign="top">
        			<td>YouTube</td>
        			<td><input id="mt_theme_options[offer_youtube_btn]" class="regular-text" type="text" name="mt_theme_options[offer_youtube_btn]" value="<?php esc_attr_e( $options['offer_youtube_btn'] ); ?>" /></td>
      			</tr>
                
                <tr valign="top">
        			<td>YouTube-URL</td>
        			<td><input id="mt_theme_options[offer_youtube_url]" class="regular-text" type="text" name="mt_theme_options[offer_youtube_url]" value="<?php esc_attr_e( $options['offer_youtube_url'] ); ?>" /></td>
      			</tr>
                
                <tr valign="top">
        			<td>iTunes</td>
        			<td><input id="mt_theme_options[offer_itunes_btn]" class="regular-text" type="text" name="mt_theme_options[offer_itunes_btn]" value="<?php esc_attr_e( $options['offer_itunes_btn'] ); ?>" /></td>
      			</tr>
                
                <tr valign="top">
        			<td>iTunes-URL</td>
        			<td><input id="mt_theme_options[offer_itunes_url]" class="regular-text" type="text" name="mt_theme_options[offer_itunes_url]" value="<?php esc_attr_e( $options['offer_itunes_url'] ); ?>" /></td>
      			</tr>
                
                <tr valign="top">
        			<td>Postkarten</td>
        			<td><input id="mt_theme_options[offer_cards_btn]" class="regular-text" type="text" name="mt_theme_options[offer_cards_btn]" value="<?php esc_attr_e( $options['offer_cards_btn'] ); ?>" /></td>
      			</tr>
                
                <tr valign="top">
        			<td>Postkarten-URL</td>
        			<td><input id="mt_theme_options[offer_cards_url]" class="regular-text" type="text" name="mt_theme_options[offer_cards_url]" value="<?php esc_attr_e( $options['offer_cards_url'] ); ?>" /></td>
      			</tr>
                
                
                <tr valign="top">
					<th>Footer</th>
      			</tr>

      			<tr valign="top">
        			<td>Departementsbezeichnung</td>
        			<td><input id="mt_theme_options[foot_departement_title]" class="regular-text" type="text" name="mt_theme_options[foot_departement_title]" value="<?php esc_attr_e( $options['foot_departement_title'] ); ?>" /></td>
      			</tr>
                
                <tr valign="top">
        			<td>Rechtliches</td>
        			<td><input id="mt_theme_options[foot_right_btn]" class="regular-text" type="text" name="mt_theme_options[foot_right_btn]" value="<?php esc_attr_e( $options['foot_right_btn'] ); ?>" /></td>
      			</tr>
                
                <tr valign="top">
        			<td>Rechtliches-URL</td>
        			<td><input id="mt_theme_options[foot_right_url]" class="regular-text" type="text" name="mt_theme_options[foot_right_url]" value="<?php esc_attr_e( $options['foot_right_url'] ); ?>" /></td>
      			</tr>
                
                <tr valign="top">
        			<td>Impressum</td>
        			<td><input id="mt_theme_options[foot_imprint_btn]" class="regular-text" type="text" name="mt_theme_options[foot_imprint_btn]" value="<?php esc_attr_e( $options['foot_imprint_btn'] ); ?>" /></td>
      			</tr>
                
                <tr valign="top">
        			<td>Impressum-URL</td>
        			<td><input id="mt_theme_options[foot_imprint_url]" class="regular-text" type="text" name="mt_theme_options[foot_imprint_url]" value="<?php esc_attr_e( $options['foot_imprint_url'] ); ?>" /></td>
      			</tr>
      			     			
      		</table>
    				
		</div>		
		
		<div id="departmenu">
			<table class="form-table" style="width:75%">
                
				<tr valign="top">
        			<td>Bundesverwaltung</td>
        			<td><input id="mt_theme_options[head_bread_bv_text]" class="regular-text" type="text" name="mt_theme_options[head_bread_bv_text]" value="<?php esc_attr_e( $options['head_bread_bv_text'] ); ?>" /></td>
      			</tr>
                
      			<tr valign="top">
        			<td>Bundesrat</td>
        			<td><input id="mt_theme_options[head_bread_br_text]" class="regular-text" type="text" name="mt_theme_options[head_bread_br_text]" value="<?php esc_attr_e( $options['head_bread_br_text'] ); ?>" /></td>
      			</tr>
                
                <tr valign="top">
        			<td>Bundesrat-URL</td>
        			<td><input id="mt_theme_options[head_bread_br_url]" class="regular-text" type="text" name="mt_theme_options[head_bread_br_url]" value="<?php esc_attr_e( $options['head_bread_br_url'] ); ?>" /></td>
      			</tr>
                
                <tr valign="top">
					<th></th>
      			</tr>
                
                <tr valign="top">
        			<td>Bundeskanzlei</td>
        			<td><input id="mt_theme_options[head_bread_bk_text]" class="regular-text" type="text" name="mt_theme_options[head_bread_bk_text]" value="<?php esc_attr_e( $options['head_bread_bk_text'] ); ?>" /></td>
      			</tr>
                
                <tr valign="top">
        			<td>Bundeskanzlei-URL</td>
        			<td><input id="mt_theme_options[head_bread_bk_url]" class="regular-text" type="text" name="mt_theme_options[head_bread_bk_url]" value="<?php esc_attr_e( $options['head_bread_bk_url'] ); ?>" /></td>
      			</tr>
                
                <tr valign="top">
					<th></th>
      			</tr>
                
                <tr valign="top">
        			<td>EDA</td>
        			<td><input id="mt_theme_options[head_bread_eda_text]" class="regular-text" type="text" name="mt_theme_options[head_bread_eda_text]" value="<?php esc_attr_e( $options['head_bread_eda_text'] ); ?>" /></td>
      			</tr>
                
                <tr valign="top">
        			<td>URL</td>
        			<td><input id="mt_theme_options[head_bread_eda_url]" class="regular-text" type="text" name="mt_theme_options[head_bread_eda_url]" value="<?php esc_attr_e( $options['head_bread_eda_url'] ); ?>" /></td>
      			</tr>
                
                <tr valign="top">
					<th></th>
      			</tr>
                
                <tr valign="top">
        			<td>EDI</td>
        			<td><input id="mt_theme_options[head_bread_edi_text]" class="regular-text" type="text" name="mt_theme_options[head_bread_edi_text]" value="<?php esc_attr_e( $options['head_bread_edi_text'] ); ?>" /></td>
      			</tr>
                
                <tr valign="top">
        			<td>URL</td>
        			<td><input id="mt_theme_options[head_bread_edi_url]" class="regular-text" type="text" name="mt_theme_options[head_bread_edi_url]" value="<?php esc_attr_e( $options['head_bread_edi_url'] ); ?>" /></td>
      			</tr>
                
                <tr valign="top">
					<th></th>
      			</tr>
                
                <tr valign="top">
        			<td>EJPD</td>
        			<td><input id="mt_theme_options[head_bread_ejpd_text]" class="regular-text" type="text" name="mt_theme_options[head_bread_ejpd_text]" value="<?php esc_attr_e( $options['head_bread_ejpd_text'] ); ?>" /></td>
      			</tr>
                
                <tr valign="top">
        			<td>URL</td>
        			<td><input id="mt_theme_options[head_bread_ejpd_url]" class="regular-text" type="text" name="mt_theme_options[head_bread_ejpd_url]" value="<?php esc_attr_e( $options['head_bread_ejpd_url'] ); ?>" /></td>
      			</tr>
                
                <tr valign="top">
					<th></th>
      			</tr>
                
                <tr valign="top">
        			<td>VBS</td>
        			<td><input id="mt_theme_options[head_bread_vbs_text]" class="regular-text" type="text" name="mt_theme_options[head_bread_vbs_text]" value="<?php esc_attr_e( $options['head_bread_vbs_text'] ); ?>" /></td>
      			</tr>
                
                <tr valign="top">
        			<td>URL</td>
        			<td><input id="mt_theme_options[head_bread_vbs_url]" class="regular-text" type="text" name="mt_theme_options[head_bread_vbs_url]" value="<?php esc_attr_e( $options['head_bread_vbs_url'] ); ?>" /></td>
      			</tr>
                
                <tr valign="top">
					<th></th>
      			</tr>
                
                <tr valign="top">
        			<td>EFD</td>
        			<td><input id="mt_theme_options[head_bread_efd_text]" class="regular-text" type="text" name="mt_theme_options[head_bread_efd_text]" value="<?php esc_attr_e( $options['head_bread_efd_text'] ); ?>" /></td>
      			</tr>
                
                <tr valign="top">
        			<td>URL</td>
        			<td><input id="mt_theme_options[head_bread_efd_url]" class="regular-text" type="text" name="mt_theme_options[head_bread_efd_url]" value="<?php esc_attr_e( $options['head_bread_efd_url'] ); ?>" /></td>
      			</tr>
                
                <tr valign="top">
					<th></th>
      			</tr>
                
                <tr valign="top">
        			<td>WBF</td>
        			<td><input id="mt_theme_options[head_bread_wbf_text]" class="regular-text" type="text" name="mt_theme_options[head_bread_wbf_text]" value="<?php esc_attr_e( $options['head_bread_wbf_text'] ); ?>" /></td>
      			</tr>
                
                <tr valign="top">
        			<td>URL</td>
        			<td><input id="mt_theme_options[head_bread_wbf_url]" class="regular-text" type="text" name="mt_theme_options[head_bread_wbf_url]" value="<?php esc_attr_e( $options['head_bread_wbf_url'] ); ?>" /></td>
      			</tr>
                
                <tr valign="top">
					<th></th>
      			</tr>
                
                <tr valign="top">
        			<td>UVEK</td>
        			<td><input id="mt_theme_options[head_bread_uvek_text]" class="regular-text" type="text" name="mt_theme_options[head_bread_uvek_text]" value="<?php esc_attr_e( $options['head_bread_uvek_text'] ); ?>" /></td>
      			</tr>
                
                <tr valign="top">
        			<td>URL</td>
        			<td><input id="mt_theme_options[head_bread_uvek_url]" class="regular-text" type="text" name="mt_theme_options[head_bread_uvek_url]" value="<?php esc_attr_e( $options['head_bread_uvek_url'] ); ?>" /></td>
      			</tr>
                
			
			</table>
		</div>
		
		<div id="404">
			
			<table class="form-table" style="width:75%">
                
                <tr valign="top">
					<th>Header</th>
      			</tr>

      			<tr valign="top">
        			<td>Departementsbezeichnung</td>
        			<td><input id="mt_theme_options[head_departement_title]" class="regular-text" type="text" name="mt_theme_options[head_departement_title]" value="<?php esc_attr_e( $options['head_departement_title'] ); ?>" /></td>
      			</tr>
                
                
      			     			
      		</table>
    				
		</div>
		        
    <!-- Einstellungen speichern -->
    <p class="submit"><input type="submit" class="button-primary" value="Einstellungen speichern"/></p>
    
  </form>
</div>
<?php }

// Strip HTML-Code:
// Hier kann definiert werden, ob HTML-Code in einem Eingabefeld 
// automatisch entfernt werden soll. Soll beispielsweise im 
// Copyright-Feld KEIN HTML-Code erlaubt werden, kommentiert die Zeile 
// unten wieder ein. http://codex.wordpress.org/Function_Reference/wp_filter_nohtml_kses
function mt_validate_options( $input ) {
	// $input['copyright'] = wp_filter_nohtml_kses( $input['copyright'] );
	return $input;
}
?>