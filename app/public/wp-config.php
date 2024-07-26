<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '56yP;yAk&V@0+)x 1K (CQs#zv`rwP_P:2k 8Z{KM,VP4lz>=&!p1:5aYx;zQ$p/' );
define( 'SECURE_AUTH_KEY',   '/K|>N I DHpP$sN7Y#T|0BP(yEJ,|sN5%/7ZIb%+3l13`r2oheenC#>~@682Fo3X' );
define( 'LOGGED_IN_KEY',     '9;k-]KKLI2GiYW<.npO|6<{;%Tuc++H0S5^xiG.jJ=,?+,YRwO.@>S;x=Sy`#,]e' );
define( 'NONCE_KEY',         'rLp@u[B42=+@h.YJK+8Mi&Wz>/%$L,yqn:H>_nB78*lvT)E`GN_*!>hFeT?lGf^5' );
define( 'AUTH_SALT',         'j(xR5LkXApt^+~n:{_Q/5qs<L;k*CTGRCh3alAL^O[KUTCtl+tbCn,dd?U>GiqX6' );
define( 'SECURE_AUTH_SALT',  'EU]b6y|@$M8i7J7P,|c6X-t d$SN>@4/Bj,a7c(y^je7zqI(HBuYEX+m=})jgo-H' );
define( 'LOGGED_IN_SALT',    '2KT%4k-k^oW]*^0okW1b0^o`][^jnS.UZgX*wRsz`=-BRVZEhK[MZb]e<yGf!Pfm' );
define( 'NONCE_SALT',        'v.p[3VVLiXX)j(s9X{`~!1`hhvMo)1I61QhHXl}#/7OspE0UA.5)Z2`|wx,kZJk1' );
define( 'WP_CACHE_KEY_SALT', 'fVtrYa~oG?u3%lEg}HPSlZ5hWVJm(,DA2dQj6FcD0qX]ay9#1dq>7|ap7/#R|Kda' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
