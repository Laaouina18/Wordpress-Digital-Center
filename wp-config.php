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
define( 'DB_NAME', 'digital_center' );

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
define( 'AUTH_KEY',         'g#!AO*y-Hu)j%:IqsK77U2d$)NZ lH|>[[P&7cO.Wj||E)j&5Du,tTK+q@<Zn#8D' );
define( 'SECURE_AUTH_KEY',  ']mF0|v~gZp&K*C:[!leuft)uO$~<xr#MOa`iIpcjJ(*l*2fMOo@%2r^fQ,owk2y~' );
define( 'LOGGED_IN_KEY',    'jvo3@yDnj4xQtdw`.4HlOp&}4GLJd$N?(,e[-#)FN#1Flqoz}-*B}n!Z3S GW(/|' );
define( 'NONCE_KEY',        'I9|iXG/q}.wt<cJF=#9KD-S5=qaj*_U2( k8|J&}|?,jR6m~mEDV,#}_+kSIqH?:' );
define( 'AUTH_SALT',        '^FJkLI>1P}? VK[m:DMwN](y_9~6qk1 y~-}.VQUk87J9M`&Z SxQK/L]kH4xzl*' );
define( 'SECURE_AUTH_SALT', 'z`*=i1NY#KlpAzK2{?0W ^T4wJ%XL$v$@:LF^}9m;&qSU%>_h9:B5@f^K%`l$G[r' );
define( 'LOGGED_IN_SALT',   '_/^s`qam3$KplW7c~]0PY1(f UPG7g~e_MpK]m4J<Pc&~O,wG5> H!XZA$%7Epcb' );
define( 'NONCE_SALT',       'fp&|fJDs4wBu*NO#w8``DrVnJ<3Qow%Q|7bs 2c^Rux Z]:R^Zv6!R5 r2WX~s2S' );

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
