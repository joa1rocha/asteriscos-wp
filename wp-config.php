<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// Set your environment/url pairs
$environments = array(
	'local'       => 'localhost',
	'production'  => '52.56.81.152'
);

// Get the hostname
$http_host = $_SERVER['HTTP_HOST'];

// Loop through $environments to see if there’s a match
foreach($environments as $environment => $hostname) {
	if (stripos($http_host, $hostname) !== FALSE) {
		define('ENVIRONMENT', $environment);
		break;
	}
}

// Exit if ENVIRONMENT is undefined
if (!defined('ENVIRONMENT')) exit('No database configured for this host');;

// Location of environment-specific configuration
$wp_db_config = 'wp-config/wp-db-' . ENVIRONMENT . '.php';

// Check to see if the configuration file for the environment exists
if (file_exists(__DIR__ . '/' . $wp_db_config)) {
	require_once($wp_db_config);
} else {
	// Exit if configuration file does not exist
	exit('No database configuration found for this host');
}
