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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'final' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'EBatnBj>~L_67rdb?+L9dqjjQh&&xiM~cT?N5jk`px4 @zd2sn2xZQ{m(V#>~`xJ' );
define( 'SECURE_AUTH_KEY',  'e1V{A6aH*lNmMH<ueW|)r`MD(t|vq{+uZ3I9|U*+oqRU_*Y p}q!VM@Sj#@~`dEH' );
define( 'LOGGED_IN_KEY',    'oe/x$614&/wwX,.o+~}/A4*muB)L$^,%:]N5)&G>4#fN3gzMwElTT$8,*_y7,A=z' );
define( 'NONCE_KEY',        'Q}{q<rXwnywo!==_!YGPh1Fzd/<=1+&QLjgmP<F)wm6s Uyv!rQ~N*d_l/&wGOrd' );
define( 'AUTH_SALT',        'tm^/gVEl<&pvZ|c:P|OK2Y0WLnFp|Xw<9eM {#YbsEgI`N=EpE/q4#u#H,Z)sh|`' );
define( 'SECURE_AUTH_SALT', 'CJa<X>nl+%-{|mG(l%GIN$HW6I#F7Jjc0tRL[+=}}*&(&G0XxQ;%o-A@ L=D:?Yy' );
define( 'LOGGED_IN_SALT',   'WH}.:zmR;!sO<O%I)eDM|y(HSutrmktxs;c-,tu;$ojOli8{XN-d8I:TDinjPib&' );
define( 'NONCE_SALT',       ',SK+.uJF[mCLn$1Bt&_,O{H@TQ5&qP9S[~3HqTRn5>-52o-;J,C#+EZCdh?DnjOR' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
