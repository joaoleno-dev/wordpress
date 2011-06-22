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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'x-/m|MgiU:Nv`dXT%#2|lez$8pgQ;HW^ru0C;%otMH>2ePCFD(-,_%}/m@ls/wZ{');
define('SECURE_AUTH_KEY',  'R%Ew?ll)ktYfZ*zj&XRgysWI:BU+7&z:b@AQe0u6+CSDq%vKmc$|S N3NL#64x[Y');
define('LOGGED_IN_KEY',    'uHB`$^^sO3yu`O[2g-MChic%PtZ{a7rc]y0PM))(|K5NxoL!aP#f>j8fB~CeB&k6');
define('NONCE_KEY',        '6)IUS:(+*<;@dxuUy(s.GYkmZ+/v?Z!6v7I;jitsDaa?8P>&}__6gpb/#.=qs5!E');
define('AUTH_SALT',        'WZE?@z/&SBCI6%@l1pG]vE]!)9,TMs~@N0@ybJ#-{<Dg`^fhTZ^G.YUj}-=zUn0_');
define('SECURE_AUTH_SALT', 'Mx_AT-zxS=)]6MH*ePJ6%!f?ki%j C{9`3,n^MzZ<GV5S7Lwq#a`LuT[uaA7{(_0');
define('LOGGED_IN_SALT',   'ALMsvRjbeHwI*(<:8YD!c`9fC[aDg<RK?gbYF>88elgT.y`+PW+>z_$W[_ysh~3p');
define('NONCE_SALT',       '%x8S9oZ>WFydr46(VNWW7566o{LPGl5@v S/f@vDTPDNvCkIfjbK>H?=8tC?0_H_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

