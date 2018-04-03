<?php

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bitnami_wordpress');

/** MySQL database username */
define('DB_USER', 'bn_wordpress');

/** MySQL database password */
define('DB_PASSWORD', '95f601797d');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
* Authentication Unique Keys and Salts.
*
* Change these to different unique phrases!
* You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
* You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
*
* @since 2.6.0
*/
define('AUTH_KEY', 'd2f005fa4574a924e4f604fbf7b0af28ff64812d9b8cb9495d9b686553028f5f');
define('SECURE_AUTH_KEY', '194948b25163f506955717a541ff4d8ec0f8ac5ae64b7b4c5e09c0c5b074d5e5');
define('LOGGED_IN_KEY', '688fc6ddd2b547d62b5048ec34e2f978b4dd186742b830b057500a43502146b6');
define('NONCE_KEY', '8163a85fd658857c7409e4db79856e0d3acc46231b6c22a041e802cbc8d4f247');
define('AUTH_SALT', 'bcb55bf0c34932b731043d5a295cbcf333414ef6ee95b2dc6d96e72ef396e21e');
define('SECURE_AUTH_SALT', 'ef1a52901c67d6992e55ef05b5d9541f8842718608df659561931bda9e6b6682');
define('LOGGED_IN_SALT', 'f7c0eda909dbbf411fdf327aeb8328661d49dc709251ff41bfff7f1d5a6ea78e');
define('NONCE_SALT', 'd7456e0eac6aac4a9fe707284681e984d83dfb571a0b135acc531e9d179ad7cf');

/**#@-*/

/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each
* a unique prefix. Only numbers, letters, and underscores please!
*/
$table_prefix  = 'wp_';

/**
* For developers: WordPress debugging mode.
*
* Change this to true to enable the display of notices during development.
* It is strongly recommended that plugin and theme developers use WP_DEBUG
* in their development environments.
*
* For information on other constants that can be used for debugging,
* visit the Codex.
*
* @link https://codex.wordpress.org/Debugging_in_WordPress
*/
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */
/**
* The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
* If you want to access only from an specific domain, you can modify them. For example:
*  define('WP_HOME','http://example.com');
*  define('WP_SITEURL','http://example.com');
*
*/

if ( defined( 'WP_CLI' ) ) {
$_SERVER['HTTP_HOST'] = 'localhost';
}

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', '/opt/bitnami/apps/wordpress/tmp');


define('FS_METHOD', 'direct');


//  Disable pingback.ping xmlrpc method to prevent Wordpress from participating in DDoS attacks
//  More info at: https://docs.bitnami.com/?page=apps&name=wordpress&section=how-to-re-enable-the-xml-rpc-pingback-feature

if ( !defined( 'WP_CLI' ) ) {
// remove x-pingback HTTP header
add_filter('wp_headers', function($headers) {
unset($headers['X-Pingback']);
return $headers;
});
// disable pingbacks
add_filter( 'xmlrpc_methods', function( $methods ) {
unset( $methods['pingback.ping'] );
return $methods;
});
add_filter( 'auto_update_translation', '__return_false' );
}