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
define( 'DB_NAME', 'deerwalk' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'R,Wy5Vx%}`/^.vR1~6Sk;g =g[R92=#(]#CKuDW<~|? )&aoEqMF2>/#j/uH7ViW' );
define( 'SECURE_AUTH_KEY',  'a@_8/0H]<;>v@*b;qxNSDcSved7(>I/tk& drV_l@f!xV2[>zsS|d{@(kaR:owqY' );
define( 'LOGGED_IN_KEY',    '~R/O+nn=Tn}~*aXj]xHT< K$zIoW)!Q/f6,P*lkd0~{Jj=%ue1@iYm);Lf#G}/S0' );
define( 'NONCE_KEY',        '!TW$WM6W$|N;=X^MKyL /mmu8m|s/:sAvt7x,3.l|n3zYG{]AGTz;VVseQ2/y08_' );
define( 'AUTH_SALT',        'kPdZP^rf;QrJ$G,C17x*S(hzqDAME8)dW!wfcn,_Ni+sZVOQ (2Prg.uD!iE[-ct' );
define( 'SECURE_AUTH_SALT', 'CoiO.{IW3?GKMocD0^v$PVA66mclifI 3@7z6$7?E|1~pJkGY.O@<b{,?r(PU3DK' );
define( 'LOGGED_IN_SALT',   'w`_$WzaHgkNFO@gy7&#~^JX_Q-Mm5(LW1ec}F#z>Ig}CiQ+y1*KZ<5?VUlY9N;uw' );
define( 'NONCE_SALT',       'UC8&~gxp*l)N*WYK|GQ/}A#WC}ILH1I|2|u/!{z8PA$ZDxxQOc)nDBTUO1G+KVPz' );

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

