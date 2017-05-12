<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'womendevel');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'womendevel');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'duroah');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(08i-BB[}KneN(8BuM]@QD4f*enp*-@R/:bqA9$,Z5&I1;q?{)H,cZEWK)E XPys');
define('SECURE_AUTH_KEY',  ')ZJu-3P+t^MCv~#o6,Y1r`*]/98-u22`#.nD>T6sxeUan}Cz^IB}Ev.$|s(GfLPu');
define('LOGGED_IN_KEY',    '-mY^2#<G^ZilRFpV6ybN;0CE^[ZlI1:c;?EdG-vho~->Z|lH?$91e}1|]>26l:aP');
define('NONCE_KEY',        ':Q?|7c3e95Am-8K~`&Tv%J/E~~e|/1kn8^N| hq[eX<m0Q_3Ld7M*{h4Em{1+ FF');
define('AUTH_SALT',        'K2FX>NnF<T&~k#Aj3_.;7;M{+qZX9cp5u-V)7*4q,q,oXO;#m!.{u.mXK+nWqDg`');
define('SECURE_AUTH_SALT', '|M9r%-=qsZZg+nIn1Hetl CKQ1dc-EiX]z#b<qK-l_M#&]TYj4d5a%bZT4_Bvi)A');
define('LOGGED_IN_SALT',   '9Eemb_su)( 5`|xz@uP+b`g2iL- TEaJ7npkzXiRkqLyC&(@>F+>NUHW}bH%j.<$');
define('NONCE_SALT',       '7|t&[5oDcSBd@}80(tZ3p%?n{2b6J}:aa<P^!h,E|#nm-&[kV.ZPe|2YzqSrfcWw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wd_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');


/**
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '//Users/suhyunjeon/src/womendevel');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '//Users/suhyunjeon/src/womendevel');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '//Users/suhyunjeon/src/womendevel');
}


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
