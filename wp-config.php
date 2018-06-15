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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'x;b6:I*_rll2$f0|a^#3h1KFYGDuJ{k-/84T7tvvF~uSZAtj~W?Ykq+M Kk<)hh1');
define('SECURE_AUTH_KEY',  'WxUotRh$%CPEu,a2!C%{ymg,},KJK2|$Pj x<dv=vHj5FN8<Y>B}Bq*TQ3(K?!r]');
define('LOGGED_IN_KEY',    '6[tWGcQ^~qKr __k-&dH[>J7g)zSd>N3RzE&?B<@0^Tb;a&n_S?~1rK$VA,/EWbr');
define('NONCE_KEY',        'a~3?<SFiZ)YxZwC!6n@NZ8c6%`3E{lO[-9|Cc093kCK2Z]IO=?8,=a$:{Xb;h,)p');
define('AUTH_SALT',        'U5eR)G*u)!_KztQLrw#B5q8?M1S.g^KMpm7DImg#t3T0K1)JHDA4WDm*0Sld.$LH');
define('SECURE_AUTH_SALT', 'd5E}PH{c?sdUlF0De,&^Nb f4X$Iw_2eQvO~#iy)0JH0fQ(L+m6|} 2GFM$3?3{a');
define('LOGGED_IN_SALT',   'g)L.LHM!q7q V)laV>UxausC6&u->Z]TqEI]`_6XlG+1#}F|.5~;#)mUS1<22$1[');
define('NONCE_SALT',       'T[|jjV+iyw[r^X|9F6^.MxfA_H5IgOC6C)^f3@7(w!ag0olZx;:KAh,E:j*1lx+4');

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
