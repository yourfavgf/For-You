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
define( 'DB_NAME', 'twentyone' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '[w9@nQdI,c!P J<5lNOCPRTl2Jx@&QTJqgdI#P7o!@7VvQ; L=9eG4y6u33`B@HB' );
define( 'SECURE_AUTH_KEY',  'S7$U^V0|$sz4RV(ROY82+?mGe!Tul;c|M[0--DeHy~iXTONzudM_6Fp?B!d@]dLR' );
define( 'LOGGED_IN_KEY',    '[WI:-.on!UX2%<p5Q;xwhQ,r+k4L:St2WEnv/ np~iSkPbRA^1&r8goI4kS|2<Zf' );
define( 'NONCE_KEY',        '[0<h)s-]{5@P>?Qs;j1[3^gJE.,QS(yQmmEa;79cLWO5$r`bBl<6V*Y6Gc,MdEoe' );
define( 'AUTH_SALT',        'SGhKN0WCSzV`!R5xMuR%L!2mq^.~OmbjoY*^I:ekRd6{Kni=)5a| S64UqL!P=bz' );
define( 'SECURE_AUTH_SALT', 'mb$?9N.PID5_/4V{Rb&;`c>6bx7-Y5qa3o!6R2awGnkmKFITIVe7Da;m$6(q>Fva' );
define( 'LOGGED_IN_SALT',   '#(1;-U&XZ@_IfZjmq[Ijf1!Cp7=9OJA96.X%<fWp>;(ZN=(D3kt@PnCE#:Z7T_^%' );
define( 'NONCE_SALT',       'O8BF~07D[dX5j,?)r+{n Lg`a(`1:{{/5E&P*/Q}I(qc?*pPC5_F:q)S743d<{d9' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'yp';

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
