<?php
/*
Plugin Name: Desabilita admin bar wordpress
Plugin URI: https://www.github.com/cjperes
Description: Desabilita admin bar wordpress.
Version: 1.0
Author: Caio Peres - Nork Digital
Author URI: http://www.nork.digital
*/


function ncjp_hide_admin_bar_settings()
{
?>
	<style type="text/css">
		.show-admin-bar {
			display: none;
		}
	</style>
<?php
}
function ncjp_disable_admin_bar()
{
	if (!current_user_can('administrator')) {
		add_filter('show_admin_bar', '__return_false');
		add_action('admin_print_scripts-profile.php', 'ncjp_hide_admin_bar_settings');
	}
}
add_action('init', 'ncjp_disable_admin_bar', 9);
