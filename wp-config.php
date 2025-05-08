<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hazaadb' );

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
define( 'AUTH_KEY',         'H5h3]2de|{Kv5zDczOYZz<O2<a}F`=7*v>LY){H?,+l7OzZqIGqIC]R;}R0@}z%{' );
define( 'SECURE_AUTH_KEY',  'K+U=(LaAt~%|lZ3%@;#d~Z{b)|qqWToUie<d/r|Co4h-3d~5+pX%|_5MAQB`$b}2' );
define( 'LOGGED_IN_KEY',    'SW#$B]Zi>o2__DpN^!YOFE#-t-xTMPqo$>|3n{r?Z/1[Yy&_]TnQ^5)~xcf-;t||' );
define( 'NONCE_KEY',        '+E`a.lw|IY5>2Vg$8>)zyf{#4[B7-I~hZM{J^dZ.<Z0spfyp5S+R2LFZ%yt**9*R' );
define( 'AUTH_SALT',        'n) RJD!_pgbef6c~#jze.W3X6.37Ww*qJl$g~qqwMtx[O-QP5tY.M0ae5y(-q &T' );
define( 'SECURE_AUTH_SALT', 'C5h~%<r&jKPb{sSNg$bC):B9`1+q}u,QDFr#w2K7*m`!Lfa2WJR&.V#qV.R_=<.#' );
define( 'LOGGED_IN_SALT',   '|T@q7?*KX9Au>Fl09.X-evr`rjZ11dClTC%y;!i;YGWn)mlT;VgCjbp]`jJ)GYzJ' );
define( 'NONCE_SALT',       '#ePG ?Yxd{E|zULh:r#@tE8/_:%zM+xnWS@%H9@N6Y2n{E|mT~gW{3<}UJ6}C|>-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
