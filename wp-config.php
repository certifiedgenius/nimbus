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
define( 'DB_NAME', 'nimbus' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'IQ![dSrP?=)hp+;p%jYp5Sa@V4 /8v;iqUDLu.O.-!`vF+2u)Do%yFSAu7uoOvT7');
define('SECURE_AUTH_KEY',  '>)O6r,?zW?D4f25YGk9LZ<4RLhIRymgsO_md5~!F-E4vVAMH[w,y[y|{c}VJBvM2');
define('LOGGED_IN_KEY',    ')eNArP#c%ZPdA^vb{CR*CLlK6/--2N].]a7(dnCI:Oilk Sjz[DKpSV$18aw:.Io');
define('NONCE_KEY',        'L`YMXA7JluO.VxGrx|0^NP0[+ zO8}%]`Po[VCA9%&-8X}2-&{5$h<=%7q19>~Lb');
define('AUTH_SALT',        'aS>V=9}T:%xR3OrMA(|BNoEay[kE} /*#C29rcXca}k(@uMI|2*Zn:Ay4f2n_(.]');
define('SECURE_AUTH_SALT', '#Mpj9qR5Gj0kkHiPG)|;|]+bNUE^pP*OqU{ Y>^r]u-q+~h577X8/|-;=<Z0),aJ');
define('LOGGED_IN_SALT',   'f_8U|gvBr87w{NNY+NV0HdWZkYf[rvv~S`Is~yG0Dk5/?;=fes1Y[d)2P%Xp;,qG');
define('NONCE_SALT',       '!JJVK7^T^[d}Ih*(FDF?eU+)0?Mq-]mdT].1_x,FPj|;+}bIb`W/}zM#rrs?eE0W');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nimbus_';

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
