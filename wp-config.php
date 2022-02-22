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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

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
define( 'AUTH_KEY',         'NOV@)m?st6UZ9sqH:ju(#[%GUB$D5x=8jz;SRtpNfNZ{Fpt]RB8&2h5{sp_.uyc{' );
define( 'SECURE_AUTH_KEY',  'ztgh,s^[vv?U]Ec.Me8.;F=Xp2OoURD.na,0*zC4#+He)o9&(95vyPo{%x!=Lv [' );
define( 'LOGGED_IN_KEY',    '+[GyIi8gkE.fJ+M!QT&P!LDCpHSv:I-W.yb~K 5^+4c of]~>t<q!N>9=WlB1YF6' );
define( 'NONCE_KEY',        'I?v9QA*/Y7XJOZItAk_>eW p!<0jo|15=_s~7L=joMq0I@]@>qp<LnYpi;Yla2,Y' );
define( 'AUTH_SALT',        'ABT8jPW1IL?neJ>]`a<>~&> e9BmF+[c:7mT(i(WO9s~M3RK?%oe?syq*MdKgKXI' );
define( 'SECURE_AUTH_SALT', '!fThd8q/E&|$NFn}fDbz<4[%B8P)Ihb;3$>>stCjGxfc#1v47afW#@SX!7Qz_@A4' );
define( 'LOGGED_IN_SALT',   'SO^5_ucCs*QLH,^p^7m6p/ejX3-9R=nxqhW^!h=5-@ grnz6(&3>q&|o)o1uxq9H' );
define( 'NONCE_SALT',       ']Kkz0afe(jKh`wbrDlW}l,G7}WEsgBVw.t1RK`<F`a;d*-SMJGPm.M<^ukC)&y~5' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pt_';

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
