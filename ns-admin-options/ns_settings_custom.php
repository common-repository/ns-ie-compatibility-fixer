<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php // PUT YOUR settings_fields name and your input // ?>
<?php 
settings_fields('ns_ie_compatibility_fixer_options_group'); 
$ns_ie_compatibility_fixer_option_value=get_option('ns_ie_compatibility_fixer_option')
	
?>
<div class="genRowNssdc">
 <select name="ns_option_value">
    <option value="IE=edge" <?php if ( 'IE=edge' == $ns_ie_compatibility_fixer_option_value ) echo 'selected="selected"'; ?>>IE=edge</option>
    <option value="IE=11" <?php if ( 'IE=11' == $ns_ie_compatibility_fixer_option_value ) echo 'selected="selected"'; ?>>IE=11</option>
    <option value="IE=EmulateIE11" <?php if ( 'IE=EmulateIE11' == $ns_ie_compatibility_fixer_option_value ) echo 'selected="selected"'; ?>>IE=EmulateIE11</option>
    <option value="IE=10" <?php if ( 'IE=10' == $ns_ie_compatibility_fixer_option_value ) echo 'selected="selected"'; ?>>IE=10</option>
    <option value="IE=EmulateIE10" <?php if ( 'IE=EmulateIE10' == $ns_ie_compatibility_fixer_option_value ) echo 'selected="selected"'; ?>>IE=EmulateIE10</option>
    <option value="IE=9" <?php if ( 'IE=9' == $ns_ie_compatibility_fixer_option_value ) echo 'selected="selected"'; ?>>IE=9</option>
    <option value="IE=EmulateIE9" <?php if ( 'IE=EmulateIE9' == $ns_ie_compatibility_fixer_option_value ) echo 'selected="selected"'; ?>>IE=EmulateIE9</option>
    <option value="IE=8" <?php if ( 'IE=8' == $ns_ie_compatibility_fixer_option_value ) echo 'selected="selected"'; ?>>IE=8</option>
    <option value="IE=EmulateIE8" <?php if ( 'IE=EmulateIE8' == $ns_ie_compatibility_fixer_option_value ) echo 'selected="selected"'; ?>>IE=EmulateIE8</option>
    <option value="IE=7" <?php if ( 'IE=7' == $ns_ie_compatibility_fixer_option_value ) echo 'selected="selected"'; ?>>IE=7</option>
    <option value="IE=EmulateIE7" <?php if ( 'IE=EmulateIE7' == $ns_ie_compatibility_fixer_option_value ) echo 'selected="selected"'; ?>>IE=EmulateIE7</option>
    <option value="IE=5" <?php if ( 'IE=5' == $ns_ie_compatibility_fixer_option_value ) echo 'selected="selected"'; ?>>IE=5</option>
</select>
</div>