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
define( 'DB_NAME', 'royalhotel' );

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
define( 'AUTH_KEY',         '{^22ca#3 Q@DKpZL*,c_qqYKA#jH7z,NI7f|]YFjvStUQNDm*^dSG$!/wB#I;ROt' );
define( 'SECURE_AUTH_KEY',  'Mzj}OTbXwPGn@AlZg[Hu=iW7xWA5K$#({e,[-2D[zeaR_ohaA9g,T)<Od-7i0ect' );
define( 'LOGGED_IN_KEY',    'admgTq[+gRgm5Oz/s|[[K%BA9U>+{mKH+lW2[%J/|xXDv z&dOE|YUd*Fi<5vEQm' );
define( 'NONCE_KEY',        '>LjVWuM8HU&g%XcqSOrac.xd5Hy;f0pnG7-?b_CcCc;KLO{G{zro)ceo`n&w_i9y' );
define( 'AUTH_SALT',        'Yc(8&YltAR>l=ay5T*vFj<u)YZ~R_V,z.{c|.%BRKD|WY;QwR($;1gF@&T`~z^Xk' );
define( 'SECURE_AUTH_SALT', '[=KJ7XeW,g}Ixyi#CgI>,)LiP!%CZ.qT--XI9ZH/cPvO*r,Ka1!Y,LSNdBS!G>J=' );
define( 'LOGGED_IN_SALT',   '9YZEYISJmH,|Cg]m,/@QqZpu,.m#nler<:D8eS&%)8#l34vj/>2jHm?/O4F~zK1(' );
define( 'NONCE_SALT',       '-;VmDL-(Z6xb%kEkyP[DLUnpqOlZ5H3y[xJ.,A4McY*kgG?^CT!|O]n!tdb*QEa6' );

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
