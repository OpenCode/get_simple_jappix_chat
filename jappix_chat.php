<?php
/*
Plugin Name: Jappix Chat
Description: Add a Jappix Chat on your site
Version: 1.0
Author: Francesco OpenCode Apruzzese
Author URI: http://www.e-ware.org
*/

# get correct id for plugin
$thisfile=basename(__FILE__, ".php");

# register plugin
register_plugin(
	$thisfile,
	'Jappix Chat',
	'1.0',
	'Francesco OpenCode Apruzzese',
	'http://www.e-ware.org/',
	'Add a Jappix Chat on your site (Front End Version)',
	'theme',
	''
);

register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', '1.7.1', FALSE);
queue_script('jquery',GSFRONT);
add_action('theme-header','jappix_code');


# functions
function jappix_code() {
	echo '<script type="text/javascript">
		jQuery.ajaxSetup({cache: true});
		jQuery.getScript("https://static.jappix.com/php/get.php?l=en&t=js&g=mini.xml", function() {
			MINI_ANIMATE = true;
			launchMini(false, true, "anonymous.jappix.com");
		});
	</script>';
}
?>
