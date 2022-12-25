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
define( 'DB_NAME', 'school_db' );

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
define( 'AUTH_KEY',         ')]1a02,$oj;VQunwt!$E~<~bW/LZh{AJpzc^{!s,3}2Nb!{aGk7Y![{%1O`T2zdT' );
define( 'SECURE_AUTH_KEY',  '75dm7t,I@T$u{lG8S(Q.o,)5uqnNESE5TXD#]8ZP?a}H[}/iET<$7%)i<A= :Ga&' );
define( 'LOGGED_IN_KEY',    'SOg@.H{c5 3(c`^H@JUkj#>Qa80b-sdpvPQ$5LmK59i8 SB::0X:q/hnJ$Ene.`Y' );
define( 'NONCE_KEY',        'O59R!DJ_-9-j;3p.z]vy#?g$|!dZ%@Mr&Bc-SRHmFu7^.)fJF=o)M`ms>s-bsDcn' );
define( 'AUTH_SALT',        'wWe7/,TQguRK9?IR]p+)<F$kbEQ-Y3sQQxz`!/Eq12icn~bAB#_.y1HKJiw.#qT)' );
define( 'SECURE_AUTH_SALT', '&1?x;7+KQSCzxCY!qh e7#(L|)]V/X]D8P$?~Bo.grVOgG|;5%fI9-Uh4n*BpQ+8' );
define( 'LOGGED_IN_SALT',   'WCiIE kSJP;kA&{SRdn)s$9Sq1Z[;FC[S1_S{Dr [*E%pG[0T2%1z*J@dc8_LD%S' );
define( 'NONCE_SALT',       'F[i1iec8D%3T,X#1E}8$Mt#a=`;,Jp2`6T&&6AS>l0 d,:?6{nASzWhNp:OC#lKD' );

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
