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
define( 'DB_NAME', 'mywebsite' );

/** Database username */
define( 'DB_USER', 'Latif' );

/** Database password */
define( 'DB_PASSWORD', 'h!ND*[Ly4-e6.gQM' );

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
define( 'AUTH_KEY',         'C!)b@G=1+<1ESXY>8]B@m1,$|GB1`V^d2d!k{CL2Et!uey9r_hdw2*N99IWU,ZC<' );
define( 'SECURE_AUTH_KEY',  'Q-Nq+6X)[KRKA@Yk>-[Y(EMb+K`{GN@;_ceRCH{r%t;IfK8j[$:~>>@J|pS9ZA(3' );
define( 'LOGGED_IN_KEY',    'oa6|dOo]i1u1C2}%N^0^$2t6$!1/l#K>:g,%$x/S|@7:W1%h/2;HV>D[GcpsJW--' );
define( 'NONCE_KEY',        '4=Ys.1`C`e|DWK3@V~auErRb1.Q/*}V!,UmJ;mZi[e?5BRQwb JGc%xZ)P]_bwWQ' );
define( 'AUTH_SALT',        '_;)YT]cJ5)&lwm4$T[cR5q$=}@.*,pwwI,w!_.fHov:Ir>_GaQZx(857BEH??{v:' );
define( 'SECURE_AUTH_SALT', '(P:jI=A,m5f-T.4VhlYS2W1rh(KmtP:lClO}8Uo)aOa1$D#qRv(Erh&21*> Rn5$' );
define( 'LOGGED_IN_SALT',   'TP*:GQU!6(~vZ9MG.6HNjEc _9e]<+[sqJ9noQ3=ag<%.hBRNq $[WS#{]#Q9a8@' );
define( 'NONCE_SALT',       '|fU_kT75^xLe` {U9d`KAbzSXhdrk$Jv7 F/rfBY`@ic+2RhjX8C2]X`lDU)l7#8' );

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
