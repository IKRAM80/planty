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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         '.4>sNVXieU,G-w jL&,J,QuaXq7e.4;q.:VTp/QB0W3K,yM^9KuY@)(K:!sby=iH' );
define( 'SECURE_AUTH_KEY',  ']Uwl220Vac0]WOTT73B#9e}.G%(th}2!,3@z1$AZ2.ukPpJMb~n6-&/uvO2F3.*P' );
define( 'LOGGED_IN_KEY',    'ZUyW%+_f?Lq1zp<#W-xbGMlIHEki*/a0ae}XC4_9FqvzD)bT&3}^=P9[`#whn4YM' );
define( 'NONCE_KEY',        '#/RPt(mAI&!)[3Z/c8Bzr}/2]j@D>s|VdV3/@e^yHT$!&hhLh:j05k|Q^jIHDt< ' );
define( 'AUTH_SALT',        'SK%K!@(fAq7EnhB:RuQKj?,bF7YPTl2!cvHW9Edy1 DBH/Esl1KWQi@V!{24|>d*' );
define( 'SECURE_AUTH_SALT', '5(NXf:/5c1Vvm 6}</&vfsXf pX3p$.]s JR_d*`5Cw2]S^oa00{U/q<D`3eT]O2' );
define( 'LOGGED_IN_SALT',   'ksO(kq,n#$N7KYith7d&$ o.`)ldgqWy:|{as4^X_q=p5.J,%:q3Z~bVO0s>%_p>' );
define( 'NONCE_SALT',       'AMp+fZ#H&82ew1rd{kz/d?In<W#~#brzjO_GW9_=,msSgDbhlMB~(f_F^61SmL`h' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
