<?php

define('WP_INSTALL_DIR','C:\oconnellp\wamp\wordpress');

require_once( WP_INSTALL_DIR.'\wp-config.php');
require_once( WP_INSTALL_DIR.'\wp-load.php');
require_once( WP_INSTALL_DIR.'\wp-includes\wp-db.php');
//require_once( WP_INSTALL_DIR.'\wp-includes\load.php');
require_once( WP_INSTALL_DIR.'\wp-includes\plugin.php');
require_once( WP_INSTALL_DIR.'\wp-includes\general-template.php');
require_once( WP_INSTALL_DIR.'\wp-includes\link-template.php');
require_once( WP_INSTALL_DIR.'\wp-includes\option.php');
require_once( WP_INSTALL_DIR.'\wp-includes\cache.php');
require_once( WP_INSTALL_DIR.'\wp-includes\formatting.php');


require_once('wp_php_flickr.php');

echo 'wp_php_flickr_test'.PHP_EOL;
$wp_php_flickr = new wp_php_flickr('xx','xx');

$person = $wp_php_flickr->people_findByUsername('bhaa');
var_dump($person);

//echo $phpFlickr->getErrorCode();
//echo $phpFlickr->getErrorMsg();

?>