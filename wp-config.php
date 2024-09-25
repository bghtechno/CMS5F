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
define( 'DB_NAME', 'tegar' );

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
define( 'AUTH_KEY',         '{_8<`A[6>ZR2*zZ3g<vS6{Y,@k@rA&>4sT/L!+l1puO_J}vDK.o#j{%jA~0 ][n.' );
define( 'SECURE_AUTH_KEY',  '[p%*~bjla^KqY #*S5%C7:gR(CmbxeXZg`Bwm@/H5E03mbta#Q&hn<hIwT$/O_u]' );
define( 'LOGGED_IN_KEY',    '9sh p[vaf:`^vu_o1wtiDzJIx<Q#)iR={^MPE-{~L/x#x>c:=ipR4rQ_&R7/B^iA' );
define( 'NONCE_KEY',        'CFBmljDx26B]QQ;*FS`*T(-#)F~#k]c+R:Tq/*DY{JHG&-wZ4cxuYR4gZ|b[-0wL' );
define( 'AUTH_SALT',        '>y-ipr*kYqg.F-r4=1h!a[@v+(6i0 1A%|F-;F,q(x.Z>(*tV YyHMKMr*Mg_Fcv' );
define( 'SECURE_AUTH_SALT', 'deFC#mRyoEZ/il!ZB-!sGy,H7?LM*f`^,3Z/{8&ip=R$nH$87X*0t6`.~$vuy)Nn' );
define( 'LOGGED_IN_SALT',   'meigD%ht~$OrODLNN0dGn-) _Pb2 }1dX(s+5@bO].-F2Sv*/A8]=h-/ae0kD^[1' );
define( 'NONCE_SALT',       '1uL-y2+M+Og9;.{G<isCe6-/*srE_&>)a)oq_)ojK-/(ZKZkOuB{<x#y-7hdR>X,' );

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
