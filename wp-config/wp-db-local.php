<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache
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
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dbasteriscos');
/** MySQL database username */
define('DB_USER', 'root');
/** MySQL database password */
define('DB_PASSWORD', '');
/** MySQL hostname */
define('DB_HOST', 'localhost');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');
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
define('AUTH_KEY',         '1d kQ%HP?SG9v*FW}+RiiIuq7:0`W6riw=TZ]^_<+oHMl/YT7w^}q;|UKqWEI_;_');
define('SECURE_AUTH_KEY',  'Qg{H[lu.W<{h]AMq)eoW5^scW;kxK/P;~AJhr{..vl3`%U#pW~gJD6kF*^Qr_rFk');
define('LOGGED_IN_KEY',    'l>.z}4c9CH}50^zBFKq#AMCsJ|,]rlI a~|y8npb6 R9;r)GWo<,f|5iMV&I>Cl4');
define('NONCE_KEY',        '_<~6U.kHF`?04! Y~Z+/N##@fXTaMDr#@}0,UM_xYIvTvZc>sF7%E$gYL}Xh$/C,');
define('AUTH_SALT',        'zP}L!h=p#0G2_0UU_!J -tfY)Hjsaz*2~25NL(Lt;mnGSl5.LrLcXfy0<4GsF}AN');
define('SECURE_AUTH_SALT', '#a37Af-Uh$N`)Rb`d(6?*zqSHOV&6B~<xg[lB:{0G<ZGmIft%hdQf1m<#?lptRT.');
define('LOGGED_IN_SALT',   'gu+V8sN[t#a,to>]}8&&(?yGMG3:|H>y.RXiFE=}P.o0b%c(eB^%Aos(VKEPI|Eu');
define('NONCE_SALT',       'fBHGTJOKU]>:G6cg=`I~9z|mg7[:1o$~R9(DYaSe^kf5xIrWi[mFTstD.YSby83W');
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
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');