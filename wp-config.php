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
define( 'DB_NAME', 'cars' );

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
define( 'AUTH_KEY',         '*x.F>`GYdzKnZ_V:.C 9q+8JN%9*c,1p[m@y;-iGCQo>C`gpq83u_W[lUxUvhNx>' );
define( 'SECURE_AUTH_KEY',  '^l-DQ+Y!di%dQpso*%({6~bI20(8g?*Vm{`s(|wEn4g{io:#ZXoq@ZL8Q~J;:78>' );
define( 'LOGGED_IN_KEY',    '})?jq%QXe-&#[xq$>8io.VV4d5e/5o(6I_jKDBkI)G@%M%M ]sa5 u? U_NKteNE' );
define( 'NONCE_KEY',        'I_L:B6Q4 @:>A&e^/- !mXX7X-uB:%1]*s%bVP:zUH{Bru[&o:OoBjSYz`;UyECa' );
define( 'AUTH_SALT',        'gPbo^x@Iyd1)!P}XYmU/X5ftKSVxG>. vU#EN+l=V.D(M}p[/=.}U9;3*Fzax^2z' );
define( 'SECURE_AUTH_SALT', 'dju&z[#v{CNhqBC(fnxEeZ`t:/NLmG/g ?EI M5*jQ;EXZ05>&T=Y8IvCcz-}>BQ' );
define( 'LOGGED_IN_SALT',   'PaLKT}I^6UCzJu,,NW* $_G3FeA9{R2Tc{F[~v1|%6[fP*&iAp+2Dfy<MF$by:bU' );
define( 'NONCE_SALT',       ' )uX#+Ul`[`%Ve|T_K*ih$x9{F , Bv;i@J=Yl2$AZ$O_v-4a$lRW{%NGWZ& / g' );

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
