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
define( 'DB_NAME', 'cars_trajectory' );

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
define( 'AUTH_KEY',         'UX=%L(,5#~G}1uVUC(7/xMbY3MvG0.|5#1tl}:D|U]xW4w6!K/7.Ps#~}A`&>~R~' );
define( 'SECURE_AUTH_KEY',  ' +Fu]1CqM;+Ed(cf2yw@azx}xP;ods-|D0<d-BPIDSTb}1;V wZHOjG8SiW*4zqR' );
define( 'LOGGED_IN_KEY',    'WoU7Q$b_*UjMWD|OPLh[%F&Ozn-0^DseW6*>6a/.Ku6R|t}2;BE,>oi*5*n|!.yp' );
define( 'NONCE_KEY',        '7T.w+j5Ux}${eVtTjwM(){LN2fQv/waZU3fW0p[vYUQc}@rbIJE-/<y[^G;A2e2A' );
define( 'AUTH_SALT',        '.(vs-{NVB{6)u6@13U(D_pL8(M`$7O~VSFA1d2<7n|8kMGs9~4J?C $O{!>PMo*h' );
define( 'SECURE_AUTH_SALT', '?9G@x`YwjjZ~XPzJ{dfY#E0P<56pDo8dI GnsUsFd[iOfHk.]`1:KW&L|maen9PM' );
define( 'LOGGED_IN_SALT',   'My6oz%ceEUp.(lAk.DY-g,<$FZ@#Ya9tLv&W/yk+aUP&ePJvs;a9$li#^@.&W${h' );
define( 'NONCE_SALT',       'Ni:d(<W08g.S|IUvOp$: ]b$fe~_n[j3SCm,1hOon::OQ9,vnOEj`vuD{X<#wZcG' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ws_';

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
