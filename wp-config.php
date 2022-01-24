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
define( 'DB_NAME', 'techrohit' );

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
define( 'AUTH_KEY',         'go:.zn2f]C;}o/<%qlNyIs{_pI36!17ZH$1]w.4[+wHN[V*g:5O%RdT4#I%Rw>]S' );
define( 'SECURE_AUTH_KEY',  'uD;).1([a>6jn[$d_7DR;sKkRaw;HZ7=u?=&?P9]mB>u$b7C)!S!pHvV%3_(e2w*' );
define( 'LOGGED_IN_KEY',    'lvw,(cLHo{SF#lzfiqCKE(G`CQ-9{Oj0mZ;j5|@LumGRse=DG8vs0S<LNYB ^1Ag' );
define( 'NONCE_KEY',        'a@.Kn 9@3Qb{qVVJY8_R*A~Kl=[X$SF9)2k3*N(j}SL}8Eom?G_IZY*!{PZY7Ie`' );
define( 'AUTH_SALT',        '_>{KJ4.P>1Sw0iywngA97tUMB`uyd`R(x*;*t>m`xohyqqV,h6Gfg9BBdH`JUzNT' );
define( 'SECURE_AUTH_SALT', ':xN+ias)X1f:M?/b&pt69[WlY&_NGN?cQ?p&O!K}K2{;.#1>p8kW1IjF3,}3$vKB' );
define( 'LOGGED_IN_SALT',   ':z;:m*K!eBX;$dz/Zyhwihu~`Qk#%GYJG2]@hAZZ0`nN;$go=a^Ut> ih=cz 8=g' );
define( 'NONCE_SALT',       '^`Y7gUrG(Ot?PfU`-=G@NzW2pD$S:?TV~>!d;hm)G476-|^/DOf FT{V>S1:/F %' );

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
