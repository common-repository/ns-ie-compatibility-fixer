<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
require_once( plugin_dir_path( __FILE__ ).'inc.php');

$link_sidebar = $ns_url_plugin_premium.'?ref-ns=2&campaign=ICF-sidebar&utm_source='.$ns_menu_label.'%20Sidebar&utm_medium=Sidebar%20dentro%20settings&utm_campaign='.$ns_menu_label.'%20Sidebar%20premium';
$link_bannerino = $ns_url_plugin_premium.'?ref-ns=2&campaign=ICF-bannerino&utm_source='.$ns_menu_label.'%20Bannerino&utm_medium=Bannerino%20dentro%20settings&utm_campaign='.$ns_menu_label.'%20Bannerino%20premium'; 
$link_bannerone = $ns_url_plugin_premium.'?ref-ns=2&campaign=ICF-bannerone&utm_source='.$ns_menu_label.'%20Bannerone&utm_medium=Bannerone%20dashboard&utm_campaign='.$ns_menu_label.'%20Bannerone%20premium'; 
$link_promo_theme = $ns_url_theme_promo.'?ref-ns=2&campaign=ICF-JoinClub&utm_source='.$ns_theme_promo_slug.'%20'.$ns_menu_label.'%20Sidebar&utm_medium=Sidebar%20'.$ns_theme_promo_slug.'%20dentro%20settings&utm_campaign='.$ns_theme_promo_slug.'%20'.$ns_menu_label.'%20Sidebar%20premium';
?>
		
	    <div class="verynsbigbox">
	    	<?php 
	    		/* *** BOX NEWSLETTER *** */
				// require_once( plugin_dir_path( __FILE__ ).'ns_settings_box_newsletter.php');

	    		/* *** BOX THEME PROMO *** */
				require_once( plugin_dir_path( __FILE__ ).'ns_settings_box_theme_promo.php');
			?>			
		</div>
	   

		<div class="verynsbigboxcontainer">
			
			<h2><?php echo $ns_full_name; ?> Settings</h2>
			<p>&nbsp;</p>
			<?php 
					if(isset($_POST['submit']))
						update_option('ns_ie_compatibility_fixer_option', $_POST['ns_option_value']);
				?>	
			<div class="ns_border_div_ns_themes">
				<form method="post" action="#" enctype="multipart/form-data" >
					<h3><?php _e('Set compatibility:')?></h3>
		    		<?php /* *** BOX OPTION *** */ 

		    		require_once( plugin_dir_path( __FILE__ ).'ns_settings_custom.php'); ?>				
					<p><input type="submit" class="button-primary" id="submit" name="submit" value="<?php _e('Save Changes') ?>" /></p>
						
				</form>
			</div>
		</div>