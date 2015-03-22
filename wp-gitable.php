<?php
/*
 * After successfull installation add
 *   require_once('wp-gitable.php');
 * to the top of wp-config.php`
*/
$base_dir = '/wordpress-gitable/';

define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . $base_dir . 'wordpress');
define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . $base_dir);

define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . $base_dir . 'wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . $base_dir . 'wp-content');
