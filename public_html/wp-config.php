<?php
define( 'WP_CACHE', true );






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
define( 'DB_NAME', 'u691391834_KPMNM' );

/** Database username */
define( 'DB_USER', 'u691391834_5hssj' );

/** Database password */
define( 'DB_PASSWORD', 'o9Z8WPELhW' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '<&&<nLymqj#AfrFOc*t8T!(sTI%G=|a;T;aUCGZlldzq=Nm9vj/jZ5*Z H+eWF}a' );
define( 'SECURE_AUTH_KEY',   't)> +@OA0>v^o}G79#d^?0z!v7f/[.DRs4>ir!!a5{5jlqTjUWxU>v/|E]r_!x9&' );
define( 'LOGGED_IN_KEY',     'aS +uvSsDB*uab,[@MU9#S!k65,^|FJ5jwftsw=RIltOE]rU}?>LsUC3k[`1%*H7' );
define( 'NONCE_KEY',         'vn@UWz{kaq1,0ByCC$THN2Cr/K#[~iB,SxsJYcCzTp8|8SI-{HhL~R@YC>VpPm`8' );
define( 'AUTH_SALT',         'h]<KS$&D/*Ar+3{|q[q>Ri(noT+I2yvG^W0qf#Z@aVeK]^Pg&=t(hC6WPhZGkN(.' );
define( 'SECURE_AUTH_SALT',  '9Jqe*7o411|xMg[*lvf;SXOu@|HjCyOA8U=7fCS&]1?D#E2A&Wv2LPa95tW#NHw=' );
define( 'LOGGED_IN_SALT',    'f0_A>VvqL,b<V4>7IG_8E4BBI]6fvzdLg7]qn (wCUU,uYp5[ZpjY/Df@3tcqbLI' );
define( 'NONCE_SALT',        'r?UWO;Ivuk~3O`R8S|_FM^FbH}f5PVQrzXlX;2wGY.p6$!IuP{*D14X4HPhCqLZ ' );
define( 'WP_CACHE_KEY_SALT', ' PM+^d!Yh%M.jp;feAPD8=gL!$3+u6 e=GJ..3:gVKy^SyjPK9M+#K0<pO@XOCe8' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'de89ec13e992a0765ca288afcefc3275' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
