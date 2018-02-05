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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ecommerce');

/** MySQL database username */
define('DB_USER', 'ecommerce');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'VEG|?Ge Di;HX4GVoZaJ$SfEsZ&XioFT*9Pl *+IRsc@Exs;}xIsa5x(WVo_(SYC');
define('SECURE_AUTH_KEY',  'QNaf{5esN54%/pY=WFk^+c*3}nCa<KIy!}D2Q(aeX,{8mAOzu=.:kI^p>AkHS>Q_');
define('LOGGED_IN_KEY',    '_MICp|gA7KUa,UC/;!k@1{x9$[o+f/)g;{j2BWjCAI5AX]}1kE+-tgU*>H-$fmk<');
define('NONCE_KEY',        'L=qjG.,So+YT,13{(S}9A =R+Lur_Wyse^GeB]x-e%3Rd8M}l_c[TnCj`njA:!(F');
define('AUTH_SALT',        'o<?1Xc}~z#{))y)a~CSP/u9;;xAt|pR$J-4%KSv(f)f1+G1p~e.FR6-G=>F]_wAu');
define('SECURE_AUTH_SALT', 'y.[qNZI}LUB]=xPsQ`GyQtaK6t%07Yb!>tL22YIv6+[Y[iGan(XkY 1V]B=2~erQ');
define('LOGGED_IN_SALT',   '4@j?>!4@5E^ra2iyCs<W^zVu?JdBdJTBu:@%rn7T+JK*!nPsVPKlYM@01LA|n;An');
define('NONCE_SALT',       'gi8sD(C:&a}Nixmx^R7dc-5P7h_A =+k7hC(-T*vc-iqA/~KY=Z{SV(ip2($6W6Q');

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
