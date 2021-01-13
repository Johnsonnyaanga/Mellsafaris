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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mellsafaris' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xMBd3F+XicuJDk+UR`9]qFGP 223MJLE8@=`,$is|&xG%57a0#l|a>k)mGe(o_NJ' );
define( 'SECURE_AUTH_KEY',  'NP6G;D|U{EGI),gwRI6;dpcR3CzpgRZ|3R~ut-{;G*=f(Q}Y&b<%0::k-zW#*lj>' );
define( 'LOGGED_IN_KEY',    '*E/!tE{T*q+q3qd/P!#mU(;6DJSilo]1oR`AoagVIkKgbte/@G]~<`l`}fkj)}^y' );
define( 'NONCE_KEY',        '#@c^q)I R& (?hjP?G1n,O_xU3/aUq?8TCWZc0wV>I]c!g0_^u?$A@VMfK<euP|3' );
define( 'AUTH_SALT',        'Du]5Ic/RkAHqR,nWN>1)5bUt#Z7,*&kfZ3C${8t!iO f&i+(oE7VOJ`%MyD=&KX/' );
define( 'SECURE_AUTH_SALT', 'giyeBHevJ#9kRK!h%Wj)q !uQd%MoGjqVGM.P@:N@ouKJye%].R6YRj(;y]~gRMf' );
define( 'LOGGED_IN_SALT',   '&fF2X{5:gPsGpiFPyQww_c@s138/R )0Z2Ni#AA9Z1n`Dkk$$BWMDlnm;f@7{|%y' );
define( 'NONCE_SALT',       'm.?zS17Ci$mn9d^oHG>T,ieGkU6Y9y5]Aoea7GMOA)4rVPJm{w;`33,yr(E=^,0}' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
