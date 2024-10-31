<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="nsbigbox<?php echo $ns_style; ?>">
	<div class="titlensbigbox<?php echo $ns_style; ?>">
		<h4><?php echo strtoupper($ns_full_name); ?> <?php _e('PREMIUM VERSION', 'ns-ie-compatibility')?></h4>
	</div>
	<div class="contentnsbigbox">
		<p><?php _e('ALL FREE VERSION FEATURES and:', 'ns-ie-compatibility')?><br/><br/> <?php echo $ns_premium_feature_list; ?></p>
		<a href="<?php echo $link_sidebar; ?>" class="linkBigBoxNS">
			<div class="buttonNsbigbox<?php echo $ns_style; ?>">
				<?php _e('UPGRADE!', 'ns-ie-compatibility')?>
			</div>
		</a>
	</div>
</div>