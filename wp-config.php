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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webmedia_halo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '3&<8Jk}=bIC~T2Fs[<b7!*]BWj~:V!1nh/y[[uEeyY_^8$|G3*$a.~uM9X?TcI>~' );
define( 'SECURE_AUTH_KEY',  'v4CFMI+,e{h#@Q:V!Tufhor*|Tj:w7Is7[Mv4kR6-:NeN5;g1}ABuIl)^!LmdqGc' );
define( 'LOGGED_IN_KEY',    '*uK#*uL6o8/9Dz>Dxw>RLoT}m^al1T<HgRlltFD]9<3k*:f3~m7DtEfh)M_5c:cY' );
define( 'NONCE_KEY',        'R9|<2tXz51uBA* <[_~x{HpfU`{,gt<Z5<t6 j7f&[4+Tq~[>M$xcS(O,&)WqV]R' );
define( 'AUTH_SALT',        'Uc,L$Y;V^:,Bl_In6A^V(esyP,,+03=&JcHX0#)t0M7q(rKofo;7X;d?:!5,br*3' );
define( 'SECURE_AUTH_SALT', '[q%C6q);v=BGt/ c.ljF%+#Ly2XcPmw(K[YFd_<=MjpB[&y-7d9g75F@:myE5i>L' );
define( 'LOGGED_IN_SALT',   '0Nrv$D1my[{(F{!fQG`?| N,qi6d4-H)Z}?~L@#[<o#uMts&:s zM5O%TQ8>vb~/' );
define( 'NONCE_SALT',       '1<#KyRDl|>po{lT@W331~]CX2^d{A[5B?~G1.f-g=&8QI{MfRaOu+.h)Pr-^S(VT' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'webmedia_';

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
define( 'WP_DEBUG', true );
define('FS_METHOD', 'direct');
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
