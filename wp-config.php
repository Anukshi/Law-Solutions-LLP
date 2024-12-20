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
define( 'DB_NAME', 'assesment' );

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
define( 'AUTH_KEY',         '/AC;_?*<_C!lS+TqPge!5}l%a$$5:7+05n d:iD&ymPLoC}EGo3~K>v/WF8Lqxf)' );
define( 'SECURE_AUTH_KEY',  '3J$UBxgy?|,CBBsdAUYs- Edw!% WZNr]]}B^mf,(}B=YLsJq~?C?u)I8)Gs)GHx' );
define( 'LOGGED_IN_KEY',    'jd}ve003@`OY>Wip6K43Vp)X-Op5}&LuxWxn5CC<{(`T-:2{g1rjwumt6:N}~!&M' );
define( 'NONCE_KEY',        'RPvSQBVum<GQ*Vc[Hy[b:C.K#HWwgQUkF)xpqE>+j`a!J8Qd5dIts:%M>,-Gm!&l' );
define( 'AUTH_SALT',        'Cr,*ez:jF:gun)sb.9kW<O_g`|N!qpNo]@DUigzXWW3+]nwS}t&F`8M^DRurNX?Z' );
define( 'SECURE_AUTH_SALT', 'f} v0k+LA.46k1J;HH`?yH#>/KR_`g,;wy?p;_3d`JgU3(iRvc*h}m6=kZ.~DAE2' );
define( 'LOGGED_IN_SALT',   'v9f=]661lJZ,U}ea$QC}!:CS^gcjvVQ5qTlu@r[{N2K[q&nlZ_}3y8HxDD5;h/QV' );
define( 'NONCE_SALT',       ':VY}&[MCX:;}}8xYYU,1`k_BQ3J]}rfj,@L:O v4Y@}O3Z[<M[/+v0#64ai8gTR[' );

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
