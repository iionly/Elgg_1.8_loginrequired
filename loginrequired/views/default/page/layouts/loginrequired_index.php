<?php
/**
 * Loginrequired Login page layout
 *
 */

$mod_params = array('class' => 'elgg-module-highlight');
?>

<div class="loginrequired-index elgg-main elgg-grid clearfix">
	<div class="elgg-col elgg-col-1of2">
		<div class="elgg-inner pvm prl">
<?php
$top_box = $vars['login'];

echo elgg_view_module('featured',  '', $top_box, $mod_params);

echo elgg_view("index/lefthandside");
?>
		</div>
	</div>
</div>
